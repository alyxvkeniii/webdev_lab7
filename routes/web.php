<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Menu2Controller;
use App\Http\Controllers\LoginController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/{userId}', [DashboardController::class, 'index'])->name('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/menu', function () {
    return view('menu');
});

Route::view('/menu', 'menu')->name('menu');

Route::get('/faq', function () {
    return view('faq');
});

Route::view('/faq', 'faq')->name('faq');

Route::get('/faq2', function () {
    return view('faq2');
});

Route::get('/menu2', [Menu2Controller::class, 'index'])->name('menu2');

Route::view('/faq2', 'faq2')->name('faq2');


Route::view('/profile', 'profile')->name('profile');
Route::view('/account', 'account')->name('account');

Route::get('/my-recipe', function () {
    return view('my-recipe');
});

Route::view('/my-recipe', 'my-recipe')->name('my-recipe');

Route::get('/settings', function () {
    return view('settings');
});

Route::view('/settings', 'settings')->name('settings');

Route::view('/policy', 'policy')->name('policy');
Route::view('/terms', 'terms')->name('terms');

Route::view('/privacy', 'privacy')->name('privacy');
Route::view('/use', 'use')->name('use');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login'); 
Route::post('/login', [LoginController::class, 'login']); 

Route::get('/sign-up', [LoginController::class, 'showSignUpForm'])->name('sign-up');
Route::post('/sign-up', [LoginController::class, 'signUp']);