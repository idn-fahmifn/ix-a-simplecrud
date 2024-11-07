<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TamuController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return 'Hallo ID-Networkers !';
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('siswa', SiswaController::class);


// Logika Aplikasi untuk membuat fitur tamu
Route::resource('tamu', TamuController::class);












