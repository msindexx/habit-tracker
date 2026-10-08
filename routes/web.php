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
    Route::get('/dashboard', [SiteController::class, 'dashboard'])->name(name: 'site.dashboard');
    Route::post('/logout', [LoginController::class, 'logout'])->name(name: 'auth.logout');

    // Hábits
    Route::get('/dashboard/habits/create', [HabitController::class, 'create'])->name('habit.create');
    Route::post('/dashboard/habits', [HabitController::class, 'store'])->name('habit.store');
    Route::delete('/dashboard/habits/{habit}', [HabitController::class, 'destroy'])->name('habit.destroy');
    Route::get('/dashboard/habits/{habit}/edit', [HabitController::class, 'edit'])->name('habit.edit');
    Route::put('/dashboard/habits/{habit}/edit', [HabitController::class, 'update'])->name('habit.update');
});
