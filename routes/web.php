<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])
    ->name('home');

Route::get('/admin/home', [AdminController::class, 'index'])
    ->name('admin.home')
    ->middleware('is_admin');
