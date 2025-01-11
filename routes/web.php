<?php

use App\Http\Controllers\Auth\AuthenticateUserController;
use App\Http\Controllers\Auth\RegisterUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/services', [HomeController::class, 'services']);
Route::post('/book', [HomeController::class, 'book']);


Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterUserController::class, 'create'])->name('user.register');
    Route::post('/register', [RegisterUserController::class, 'store'])->name('user.register.store');

    Route::get('/login', [AuthenticateUserController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticateUserController::class, 'store'])->name('login.store');
});


Route::view("/service/book", "service.store")->name("book:service");
