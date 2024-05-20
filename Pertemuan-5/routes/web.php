<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/mahasiswa', \App\Http\Controllers\MahasiswaController::class);

Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::post('/user/login', [\App\Http\Controllers\UserController::class, 'login'])->name('user.login');
// Route::get('/user/register', [\App\Http\Controllers\UserController::class, 'showRegisterForm'])->name('user.register');
// Route::post('/user/register', [\App\Http\Controllers\UserController::class, 'register'])->name('user.register.store');

Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'register'])->name('register.store');