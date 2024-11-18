<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;

// Authentication Routes
Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// Post Routes
Route::middleware('auth')->group(function () {
    Route::get('/', [PostController::class, 'index'])->name('posts.index');
    Route::resource('posts', PostController::class)->except(['index']);
});


Route::resource('posts', PostController::class);
