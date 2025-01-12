<?php

use App\Http\Controllers\Auth\AuthenticateUserController;
use App\Http\Controllers\Auth\RegisterUserController;
use App\Http\Controllers\Booking\BookingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Payment\PaymentController;

Route::get('/services', [HomeController::class, 'services']);
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::view("/book", "service.store")->name("book:service");
Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');
Route::get('/paystack-callback', [PaymentController::class, 'handleGatewayCallback']);


Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterUserController::class, 'create'])->name('user.register');
    Route::post('/register', [RegisterUserController::class, 'store'])->name('user.register.store');
    Route::get('/login', [AuthenticateUserController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticateUserController::class, 'store'])->name('login.store');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/my-booking', [BookingController::class, 'index'])->name('booking.index');
});
