<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
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

Route::prefix('auth')->group(function() {

    Route::post('registration', RegistrationController::class);
    Route::post('login', LoginController::class);

    Route::middleware('auth:sanctum')->group(function() {
        Route::post('logout', LogoutController::class);
    });

});

Route::middleware('auth:sanctum')->group(function() {

    Route::apiResource('orders', OrderController::class);

    Route::prefix('users')->group(function() {
        Route::get('', [UserController::class, 'index']);
        Route::put('', [UserController::class, 'update']);
        Route::apiResource('feedback', FeedbackController::class);
    });

});

Route::apiResource('offers', OfferController::class);
