<?php

use Illuminate\Support\Facades\Route;

Route::inertia('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');

    Route::prefix('students')->name('students.')->group(function () {
        Route::inertia('dashboard', 'student/dashboard')->name('dashboard');
        Route::inertia('update-profile', 'student/update-profile')->name('update-profile');
    });
});

require __DIR__.'/settings.php';
