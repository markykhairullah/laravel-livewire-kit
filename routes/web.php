<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages::home')->name('home');

Route::middleware([])->group(function () {
    Route::view('login', 'pages::login')->name('login');
});

require __DIR__.'/dashboard.php';
