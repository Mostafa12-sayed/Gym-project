<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Auth::routes(['verify'=> true]);
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('verified');

