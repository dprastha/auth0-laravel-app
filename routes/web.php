<?php

use Illuminate\Support\Facades\Route;
use Auth0\Login\Auth0Controller;
use App\Http\Controllers\Auth\Auth0IndexController;

Route::view('/', 'welcome');

Route::get('/auth0/callback', [Auth0Controller::class, 'callback'])->name('auth0-callback');

// Auth0 Index Controller
Route::get('/login', [Auth0IndexController::class, 'login'])->name('login');
Route::get('/logout', [Auth0IndexController::class, 'logout'])->name('logout');
Route::get('/profile', [Auth0IndexController::class, 'profile'])->name('profile');

