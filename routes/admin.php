<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/mm',function (){
    return "tyes";
});
Route::get('/home', [TestController::class, 'index'])->name('home');
Auth::routes();
