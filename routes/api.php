<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function() {
    Route::prefix('auth')->group(function() {
        Route::post('register', RegisteredUserController::class);
        Route::post('login', [AuthenticatedSessionController::class, 'store']);
        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
        Route::get('profile', fn (Request $request) => $request->user())->middleware('auth:sanctum');
    });

    Route::apiResource('products', ProductController::class);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
