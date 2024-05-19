<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/mahasiswa', \App\Http\Controllers\MahasiswaController::class);

Route::get('/user', [\App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::post('/user/login', [\App\Http\Controllers\UserController::class, 'login'])->name('user.login');