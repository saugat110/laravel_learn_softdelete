<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('add');
});

Route::post('/add', [CustomerController::class, 'create']);

Route::get('/display', [CustomerController::class, 'index']);

Route::get('/movetotrash/{id}', [CustomerController::class, 'mvtrash']);

Route::get('/viewtrash', [CustomerController::class, 'viewtrash']);

Route::get('/restore/{id}', [CustomerController::class, 'restore']);




