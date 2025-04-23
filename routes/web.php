<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\StokBarangController;



Route::get('/', function () {
    return redirect()->route('barang-masuk.index');
});
Route::get('/stok', [StokBarangController::class, 'index'])->name('stok.index');

Route::resource('barang', BarangController::class);
Route::resource('barang-masuk', BarangMasukController::class);
Route::resource('barang-keluar', BarangKeluarController::class);

