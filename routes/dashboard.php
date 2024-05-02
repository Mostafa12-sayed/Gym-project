<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\App;




Auth::routes(['verify'=> true]);
Route::get('/home', [HomeController::class, 'index'])->name('home')->middleware('verified');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/login',function ()
    {
    $infromation = DB::table('infromation')->get();
    return view('auth.login',['info'=> $infromation]);})->name('login');




Route::get('/register',function (){
    $infromation = DB::table('infromation')->get();
    return view('auth.register',['info'=> $infromation]);})->name('register');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


