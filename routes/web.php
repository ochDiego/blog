<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\HomeController;


Route::get('/', HomeController::class)->name('home');


Route::resource('entradas',EntradaController::class)->names('entradas');