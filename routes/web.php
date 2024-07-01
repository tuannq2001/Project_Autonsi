<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DangNhap;
use App\Http\Controllers\SanPhamController;
use App\Http\Controllers\KhoController;

use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    return view('welcome');

});
Route::get('/sign-in',[DangNhap::class, 'dangNhap'])->name('dang-nhap');
Route::post('/homepage',[DangNhap::class, 'xuLyDangNhap'])->name('xl-dang-nhap');
Route::post('/signup',[DangNhap::class, 'xuLyDangKi'])->name('xl-dang-ki');
Route::get('/signup',[DangNhap::class, 'dangKi'])->name('dang-ki');
Route::get('/',[DangNhap::class, 'main'])->name('homepage');
Auth::routes();
Route::get('/dang-xuat',[DangNhap::class, 'dangXuat'])->name('dang-xuat');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Sản phẩm
Route::get('/product',[SanPhamController::class, 'layDanhSachSanPham'])->name('san-pham');
Route::post('/addproduct',[SanPhamController::class, 'xuLyThemSanPham'])->name('xl-them-san-pham');
Route::get('deleteproduct/{id}',[SanPhamController::class, 'xoaSanPham'])->name('xoa-san-pham');
Route::get('tim-san-pham',[SanPhamController::class, 'timSanPham'])->name('tim-san-pham');
//Nhập kho
Route::get('/poinputs',[KhoController::class, 'layDanhSachNhapKho'])->name('nhap-kho');
//Xuất Kho
Route::get('/sooutputs',[KhoController::class, 'layDanhSachXuatKho'])->name('xuat-kho');

