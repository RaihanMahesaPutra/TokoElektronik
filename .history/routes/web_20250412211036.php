<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini kamu bisa mendefinisikan semua route yang akan diakses oleh web.
|
*/

// Halaman Home (beranda)
Route::get('/', function () {
    return view('home');
});

// Rute yang hanya bisa diakses oleh user yang sudah login
Route::middleware(['auth'])->group(function () {
    // Halaman profil user
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('register', [AuthController::class, 'register'])->name('login4');
Route::post('register', [AuthController::class, 'register_action'])->name('register.action');
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'login_action'])->name('login.action');
Route::get('password', [AuthController::class, 'password'])->name('password');
Route::post('password', [AuthController::class, 'password_action'])->name('password.action');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/dashboard', function () {
    return view('dashboard'); // buat file dashboard.blade.php sesuai kebutuhan
})->middleware('auth')->name('dashboard');

// Otentikasi dari Breeze (login, register, dll.)
require __DIR__.'/auth.php';