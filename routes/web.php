<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;

Route::controller(HomeController::class)->group(function () {

    Route::get('/', 'landing')->name('landing');

    Route::get('/homePage', 'home')->name('home');
});

Route::controller(AuthController::class)->group(function () {

    Route::get('/login', 'login')->name('login');

    Route::get('/signup', 'signup')->name('signup');
});

Route::controller(ProjectController::class)->group(function () {

    Route::get('/project', 'index')->name('projects');
});

Route::controller(DonationController::class)->group(function () {

    Route::get('/donation', 'index')->name('donations');
});

Route::controller(PaymentController::class)->group(function () {

    Route::get('/payments', 'index')->name('payments');
});

Route::controller(ProfileController::class)->group(function () {

    Route::get('/profile', 'index')->name('profile');
});

Route::controller(AdminController::class)->group(function () {

    Route::get('/admin', 'index')->name('admin');
});