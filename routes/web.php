<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // page client
});

Route::get('/admin', function () {
    return view('admin.dashboard'); // page admin
})->name('admin.dashboard');