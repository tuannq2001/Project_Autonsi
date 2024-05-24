<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DangNhap;
Route::get('/', function () {
    return view('welcome');

});

Route::post('/homepage',[DangNhap::class, 'xuLyDangNhap'])->name('xl-dang-nhap');
Route::get('/homepage',[DangNhap::class, 'main'])->name('homepage');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');