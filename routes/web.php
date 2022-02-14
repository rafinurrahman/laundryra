<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\LoginController;

Route::get('home', [HomeController::class,'index']);
Route::get('Member', [MemberController::class,'index']);
Route::resource('paket',PaketController::class);
Route::get('login',[LoginController::class, 'index'])->name('login');
Route::post('login',[LoginController::class, 'authenticate']);
