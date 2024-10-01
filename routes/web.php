<?php

use App\Http\Controllers\DaftarController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/main', [MainController::class, 'main']);

Route::get('/home', [MainController::class, 'home']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/daftar', [DaftarController::class, 'daftar']);
Route::get('/masuk', [DaftarController::class, 'masuk']);
