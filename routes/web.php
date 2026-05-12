<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Routing untuk Auth
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'register_process'])->name('signup');
Route::post('/login', [AuthController::class, 'login'])->name('signin');

Route::get('/panel-control', function () {
    return view('panel-control.index');
});

Route::get('/Favorites', function () {
    return view('panel-control.my');
});

Route::get('lang/{locale}', [AuthController::class, 'switchLang'])->name('lang.switch');