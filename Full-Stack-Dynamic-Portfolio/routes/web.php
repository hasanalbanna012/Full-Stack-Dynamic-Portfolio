<?php

use Illuminate\Support\Facades\Route;

// Home Page
Route::get('/', function () {
    return view('home'); // or 'welcome' if you want to use welcome.blade.php
})->name('home');

// About Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Services Page
Route::get('/services', function () {
    return view('services');
})->name('services');

// Portfolio Page
Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');

// Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
