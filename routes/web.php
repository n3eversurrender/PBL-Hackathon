<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/main', [MainController::class, 'main']);

Route::get('/home', [MainController::class, 'home']);

Route::get('/daftarkursus', [MainController::class, 'daftarkursus']);
