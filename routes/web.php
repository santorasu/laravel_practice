<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DemoController;

Route::get('/', [HomeController::class, 'Home']);
Route::get('/about', [HomeController::class, 'About']);
Route::get('/contact', [HomeController::class, 'Contact']);


Route::get('/Name/{namevalue}', [DemoController::class, 'MyName']);
Route::get('/Name/{FirstName}/{MiddleName}/{LastName}', [DemoController::class, 'MyFullName']);