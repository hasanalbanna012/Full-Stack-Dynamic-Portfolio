<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\PersonalDetailController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('auth.login');
Route::post('/login', [LoginController::class, 'login'])->name('auth.login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');

// Register routes
 Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('auth.register');
Route::post('/register', [RegisterController::class, 'register'])->name('auth.register.submit');

// Resource routes
Route::resource('projects', ProjectController::class)->middleware('auth');
Route::resource('personal-details', PersonalDetailController::class);
Route::resource('skills', SkillController::class);
Route::resource('educations', EducationController::class);
Route::resource('achievements', AchievementController::class);
Route::resource('experiences', ExperienceController::class);
Route::resource('infos', InfoController::class);
