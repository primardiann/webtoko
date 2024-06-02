<?php

use App\Http\Controllers\ListProdukController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/listproduk', [ListProdukController::class, 'show'] );
Route::post('/listproduk', [ListProdukController::class, 'simpan'])->name('produk.simpan');
Route::delete('/listproduk/{id}', [ListProdukController::class, 'delete'] )->name('produk.delete');



