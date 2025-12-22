<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TripController extends Controller
{
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'car_id' => 'required|exists:cars,id',
            'start_time' => 'required|date_format:Y-m-d\TH:i:s',
            'end_time' => 'required|date_format:Y-m-d\TH:i:s|after:start_time',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        //$user = $request->user();
        //Тестовый фиксированный пользователь
        $user = User::find(1);
        if (!$user) {
            return response()->json(['error' => 'User not found']);
        }

        $carId = $request->car_id;
        $startTime = $request->start_time;
        $endTime = $request->end_time;

        $car = Car::with('comfortCategory')->findOrFail($carId);
        $allowedCategoryIds = $user->position->comfortCategories->pluck('id');

        if (!$allowedCategoryIds->contains($car->comfort_category_id)) {
            return response()->json(['error' => 'This car is not available for your position']);
        }

        return DB::transaction(function () use ($user, $carId, $startTime, $endTime) {
            $conflict = Trip::where('car_id', $carId)
                ->where('status', 'active')
                ->where('start_time', '<', $endTime)
                ->where('end_time', '>', $startTime)
                ->exists();

            if ($conflict) {
                return response()->json(['error' => 'The car is already booked for this time']);
            }

            $trip = Trip::create([
                'user_id' => $user->id,
                'car_id' => $carId,
                'start_time' => $startTime,
                'end_time' => $endTime,
                'status' => 'active',
            ]);

            return response()->json($trip, 201);
        });


    }
}
