<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/services', [HomeController::class, 'services']);
Route::post('/book', [HomeController::class, 'book']);
Route::view("/login", "auth.login")->name("login");
Route::view("/register", "auth.register")->name("register");
Route::view("/service/book", "service.store")->name("book:service");
