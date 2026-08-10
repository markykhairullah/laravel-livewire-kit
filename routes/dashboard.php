<?php

use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->name('dashboard.')->middleware([])->group(function () {
    Route::view('/', 'dashboard::overview')->name('overview');
});
