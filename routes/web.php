<?php


use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register_user', [AuthController::class, 'register_user'])->name('register_user');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login_user', [AuthController::class, 'login_user'])->name('login_user');

Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profile', [HomeController::class, 'profile'])->name('profile');

// Email Verification Routes
Route::get('/verify/{token}', [AuthController::class, 'verify'])->name('verify');
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    // Add other routes for verified users here
});

