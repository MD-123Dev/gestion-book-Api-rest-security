<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Auth\LoginAuthController;
use App\Http\Controllers\Auth\RegisterAuthController;
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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::prefix('v1')->group(function () {
    Route::post('register', [RegisterAuthController::class, 'register']);
    Route::post('login', [LoginAuthController::class, 'login']);

    Route::middleware('auth:api')->group(function () {
        Route::apiResource('book', BookController::class);
        Route::apiResource('category', CategoryController::class);
    });
});
  


    
 
