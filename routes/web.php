<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Profile\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[RegisterController::class,'create'])->name('register');
Route::post('/register',[RegisterController::class,'store'])->name('register.store');


Route::get('/login',[LoginController::class,'create'])->name('login');
Route::post('/login',[LoginController::class,'authLogin'])->name('login.auth');

Route::get('/home',[HomeController::class,'index'])->name('home');


Route::post('/logout',[LogoutController::class,'logout'])->name('logout');

Route::get('/profile',[ProfileController::class,'index'])->name('profile');
Route::get('/profile/edit/{user}',[ProfileController::class,'edit'])->name('profile.edit');
Route::put('/profile/{user}',[ProfileController::class,'update'])->name('profile.update');
