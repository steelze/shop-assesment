<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function() {
    Route::prefix('auth')->group(function() {
        Route::post('register', RegisteredUserController::class);
        Route::post('login', [AuthenticatedSessionController::class, 'store']);
        Route::middleware('auth:sanctum')->group(function() {
            Route::post('logout', [AuthenticatedSessionController::class, 'destroy']);
            Route::get('profile', fn (Request $request) => $request->user());
        });
    });

    Route::apiResource('products', ProductController::class);

    // Authenticated Routes
    Route::middleware('auth:sanctum')->group(function() {
        Route::prefix('carts')->group(function() {
            Route::get('/', [CartController::class, 'index']);
            Route::post('/', [CartController::class, 'store']);
            Route::delete('{product}/remove', [CartController::class, 'destroy']);
        });

        Route::get('orders', OrderController::class);
    });
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
