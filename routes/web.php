<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemanController;
use App\Http\Controllers\productController;
use App\Http\Controllers\PageController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/sobat',[TemanController::class,'index'])->name('listteman');
Route::get('/produk',[productController::class,'index'])->name('listproduk');
Route::get('/tentang', [PageController::class, 'tentang'])->name('tentangKami');
