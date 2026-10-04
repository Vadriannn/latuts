<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('barang', BarangController::class);
Route::resource('kategori', KategoriController::class);

// Route::get('/barang', [BarangController::class, 'tampilSemua'])->name('barang.index');
// Route::get('/barang/tambah', [BarangController::class, 'formTambah'])->name('barang.create');
// Route::post('/barang/simpan', [BarangController::class, 'simpan'])->name('barang.store');
// Route::get('/barang/{barang}/ubah', [BarangController::class, 'formUbah'])->name('barang.edit');
// Route::put('/barang/{barang}/update', [BarangController::class, 'updateData'])->name('barang.update');
// Route::delete('/barang/{barang}/hapus', [BarangController::class, 'hapus'])->name('barang.hapus');
