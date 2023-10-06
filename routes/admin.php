<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\PostController;


Route::get('', [HomeController::class, 'index'])->name('admin.home');

Route::resource('categorias', CategoryController::class)->except('show')->parameters(['categorias' => 'category'])->names('admin.categories');

Route::resource('etiquetas', TagController::class)->except('show')->parameters(['etiquetas' => 'tag'])->names('admin.tags');

Route::resource('posts', PostController::class)->except('show')->names('admin.posts');