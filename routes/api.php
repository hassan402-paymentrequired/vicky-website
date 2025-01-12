<?php

use App\Http\Controllers\Booking\BookingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/rooms', [BookingController::class, 'fetchRooms']);
