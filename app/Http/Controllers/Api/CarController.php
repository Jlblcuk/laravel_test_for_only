<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Car;
use App\Models\Trip;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    public function available(Request $request) {
        $validator = Validator::make($request->all(),[
           'start_time' => 'required|date_format:Y-m-d\TH:i:s',
           'end_time' => 'required|date_format:Y-m-d\TH:i:s|after:start_time',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $startTime = $request->start_time;
        $endTime = $request->end_time;

        //$user = $request->user();
        //Тестовый фиксированный пользователь
        $user = User::find(1);
        if (!$user || !$user->position) {
            return response()->json(['error' => 'User or position not found']);
        }

        $allowedCategoryIds = $user->position->comfortCategories()->pluck('id');
        if ($allowedCategoryIds->isEmpty()) {
            return response()->json([
                'cars' => [],
                'message' => 'Нет доступных авто'
            ]);
        }

        $busyCarIds = Trip::where('status', 'active')
            ->where('start_time', '<', $endTime)
            ->where('end_time', '>', $startTime)
            ->pluck('car_id');

        $query = Car::whereIn('comfort_category_id', $allowedCategoryIds)
            ->whereNotIn('id', $busyCarIds);

        //Filters
        if ($request->filled('model')) {
            $query->where('model', $request->model);
        }

        if ($request->filled('comfort_category_id')) {
            if (!$allowedCategoryIds->contains($request->comfort_category_id)) {
                return response()->json([
                    'cars' => [],
                    'message' => 'Нет доступных авто'
                ]);
            }
            $query->where('comfort_category_id', $request->comfort_category_id);
        }

    return response()->json($query->with('comfortCategory')->get());
    }
}
