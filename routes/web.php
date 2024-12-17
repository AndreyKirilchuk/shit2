<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::middleware('auth')->group(function () {
    Route::get('/', [\App\Http\Controllers\ApplicationController::class, 'show']);
    Route::post('/application', [\App\Http\Controllers\ApplicationController::class, 'create']);


    Route::get('/search', [\App\Http\Controllers\ApplicationController::class, 'search']);

    Route::post('/logout', [\App\Http\Controllers\UserController::class, 'logout']);

    Route::middleware('admin')->group(function (){
        Route::get('/application', [\App\Http\Controllers\ApplicationController::class, 'index']);
        Route::patch('/application', [\App\Http\Controllers\ApplicationController::class, 'update']);
    });
});

Route::get('/login', [\App\Http\Controllers\UserController::class, 'getLogin']);
Route::post('/login', [\App\Http\Controllers\UserController::class, 'postLogin']);

Route::get('/signup', [\App\Http\Controllers\UserController::class, 'getSignup']);
Route::post('/signup', [\App\Http\Controllers\UserController::class, 'postSignup']);
