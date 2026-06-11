<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PanelControl\MovieController;
use Illuminate\Support\Facades\Route;

// Routing untuk Auth
Route::get('/', [AuthController::class, 'index'])->name('login');
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'register_process'])->name('signup');
Route::post('/login', [AuthController::class, 'login'])->name('signin');
Route::get('/logout', [AuthController::class, 'logout'])->name('signout');
Route::get('/movie/{id}', [MovieController::class, 'detail']);
Route::delete('/favorite/delete/{id}', [MovieController::class, 'deleteFavorite']);
Route::post('/favorite/add', [MovieController::class, 'addFavorite']);

Route::get('/panel-control', [MovieController::class, 'index']);
Route::get('/Favorites', [MovieController::class, 'favorites']);



Route::get('lang/{locale}', [AuthController::class, 'switchLang'])->name('lang.switch');