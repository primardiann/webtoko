<?php

use App\Http\Controllers\ListProdukController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/listproduk', [ListProdukController::class, 'show'] );
