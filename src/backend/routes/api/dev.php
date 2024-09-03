<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::prefix('dev')->controller(DevTestsController::class)->group(function() {

    Route::get('login', 'login');

});
