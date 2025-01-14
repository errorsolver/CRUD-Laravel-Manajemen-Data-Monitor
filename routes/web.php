<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\ResolusiController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::resource('auth', AuthController::class)->only(['store', 'show']);

Route::resource('user', UserController::class);
Route::resource('resolusi', ResolusiController::class);
Route::resource('monitor', MonitorController::class);

Route::resource('pembelian', PembelianController::class);
