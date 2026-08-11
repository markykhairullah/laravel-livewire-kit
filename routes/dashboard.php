<?php

use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->name('dashboard.')->middleware([])->group(function () {
    Route::livewire('/', 'dashboard::overview')->name('overview');

    Route::prefix('users')->name('users.')->middleware([])->group(function () {
        Route::livewire('/', 'dashboard::users.view')->name('view');
    });
});
