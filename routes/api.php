<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::get('/product','App\Http\Controllers\ProductsController@index');
Route::get('/product/{id}','App\Http\Controllers\ProductsController@showByProjectId');



Route::post('login', [\App\Http\Controllers\Api\V1\AuthController::class, 'login'])->name('login');
Route::post('logout', [\App\Http\Controllers\Api\V1\AuthController::class, 'logout'])->name('logout');
Route::post('refresh', [\App\Http\Controllers\Api\V1\AuthController::class, 'refresh'])->name('refresh');
Route::post('me', [\App\Http\Controllers\Api\V1\AuthController::class, 'me'])->name('me');
Route::post('register', [\App\Http\Controllers\Api\V1\AuthController::class, 'register']);
