<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('siswa', SiswaController::class);






Route::view('/tampilan', 'layouts.template');

Route::view('/create-tamu', 'tamu.create');






