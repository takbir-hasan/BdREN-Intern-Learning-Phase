<?php

use Illuminate\Support\Facades\Route;

// Basic pages
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact-list', function () {
    return view('contact-list');
})->name('contact-list');

// Dashboard - requires authentication and email verification
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



require __DIR__.'/auth.php';
