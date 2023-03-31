<?php

use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\ProductController;

Route::post('login', [ApiController::class, 'authenticate'])->name('login');
Route::post('register', [ApiController::class, 'register'])->name('register');
Route::apiResource('projects', ProjectController::class);
Route::apiResource('clients', ClientController::class);

Route::group(['middleware' => ['jwt.verify']], function () {
    Route::get('logout', [ApiController::class, 'logout'])->name('logout');
    
    
});
