<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Split Routing
require __DIR__ . '/api/auth.php';
require __DIR__ . '/api/guest.php';
require __DIR__ . '/api/customer.php';
require __DIR__ . '/api/admin.php';

require __DIR__ . '/api/dev.php';


Route::get('test', function(){
    return 'success';
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// <?php

// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

// Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
//     return $request->user();
// });
