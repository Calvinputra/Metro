<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\MenuController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\AuthController;
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

Route::get('/user', [AuthController::class,'user'])->middleware('auth:sanctum');

Route::post('/login', [AuthController::class,'login']);
Route::post('/logout',  [AuthController::class,'logout'])->middleware('auth:sanctum');

Route::post('/register', [AuthController::class,'register']);


Route::apiResource('/menus', MenuController::class);
Route::apiResource('/products', ProductController::class);
