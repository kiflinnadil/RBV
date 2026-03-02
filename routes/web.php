<?php

use Illuminate\Support\Facades\Route;

Route::get('/my-dashboard', function () {
    return view('mydashboard.index');
})->name('mydashboard');

require __DIR__.'/settings.php';
