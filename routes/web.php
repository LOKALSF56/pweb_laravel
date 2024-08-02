<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PegawaiController;

Route::get('/', function () {
    return view('home');
});
Route::get('/product',[ProductController::class,"index"])->name("product.index");
Route::get('/product/create',[ProductController::class,"create"])->name("product.create");
Route::post('/product',[ProductController::class,"store"])->name("product.store");
Route::get('/product/{id}/edit',[ProductController::class,"edit"])->name("product.edit");
Route::put('/product/{id}',[ProductController::class,"update"])->name("product.update");
Route::delete('/product/{id}',[ProductController::class,"delete"])->name("product.delete");
Route::get('/pegawai',[PegawaiController::class,"index"])->name("pegawai.index");
Route::get('/pegawai/create',[PegawaiController::class,"create"])->name("pegawai.create");
Route::post('/pegawai',[PegawaiController::class,"store"])->name("pegawai.store");
Route::get('/pegawai/{id}/edit',[PegawaiController::class,"edit"])->name("pegawai.edit");
Route::put('/pegawai/{id}',[PegawaiController::class,"update"])->name("pegawai.update");
Route::delete('/pegawai/{id}',[PegawaiController::class,"delete"])->name("peegawai.delete");