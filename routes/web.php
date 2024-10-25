<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//    return view('welcome');
// });

Route::get('{any}', function () { /// /app/index.php, /store
    return view('app');
 })->where('any','.*');