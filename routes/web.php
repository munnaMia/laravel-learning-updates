<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'about', [
    'array' => [
        "d", "dsl", "lsdkfj"
    ]
]);
Route::view('/contact', 'contact');
