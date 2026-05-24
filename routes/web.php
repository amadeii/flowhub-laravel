<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClienteController;

Route::get('/', [HomeController::class, 'index']);

Route::resource('clientes', ClienteController::class);      