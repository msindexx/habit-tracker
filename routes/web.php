<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HabitController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'])->name(name: 'site.index');
Route::get('/login', [LoginController::class, 'index'])->name(name: 'site.login');
Route::post('/login', [LoginController::class, 'authenticate'])->name(name: 'auth.login');
Route::get('/register', [RegisterController::class, 'index'])->name(name: 'site.register');
Route::post('/register', [RegisterController::class, 'store'])->name(name: 'auth.register');


Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name(name: 'auth.logout');

    Route::resource(name: "/dashboard/habits", controller: HabitController::class)
        ->except(methods: 'show');
});
