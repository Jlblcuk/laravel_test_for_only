<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CarController;
use App\Http\Controllers\Api\TripController;

Route::get('/available-cars', [CarController::class, 'available']);
Route::post('/trip', [TripController::class, 'store']);
