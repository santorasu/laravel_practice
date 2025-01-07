<?php

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'Home']);
Route::get('/about', [HomeController::class, 'About']);
Route::get('/contact', [HomeController::class, 'Contact']);
