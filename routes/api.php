<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Example of a custom route
Route::post('/login', 'AuthController@login'); // Example login route for token generation
