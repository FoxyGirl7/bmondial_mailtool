<?php

use Illuminate\Support\Facades\Route;


Route::get('/{any}', function () {
    return view('app');
})->where('any', '.*');
// Include API routes
require __DIR__.'/api.php';  