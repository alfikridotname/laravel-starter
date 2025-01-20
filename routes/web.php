<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::middleware('guest')->group(function () {
    // Login Form
    Route::get('/login', function () {
        return view('auth');
    })->name('login');

    // Login Action
    Route::post('/auth', [AuthController::class, 'authenticate'])->name('authenticate');

    // Register
    Route::get('/register', function () {
        return view('auth');
    })->name('register');
});

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');
});
