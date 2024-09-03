<?php

namespace App\Http\Controllers\Api;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->controller(ApiAuthController::class)->group(function() {
    Route::post('register',      'register'    );
    Route::post('login',         'login'       );
    Route::post('logout',        'logout'      )->middleware('auth:sanctum');
    Route::get ('refresh-token', 'refreshToken')->middleware('auth:sanctum');
});
