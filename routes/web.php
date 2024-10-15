<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('category',CategoryController::class);
// Route::resource('/',CategoryController::class);
// Route::resource('product',ProductController::class);
// Route::resource('/',CategoryController::class);

