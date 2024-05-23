<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DangNhap;
Route::get('/', function () {
    return view('welcome');

});

Route::post('/welcome',[DangNhap::class, 'xuLyDangNhap'])->name('xl-dang-nhap');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
