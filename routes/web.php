<?php

use App\Http\Controllers\ListProdukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TiketController;

Route::get('/', function () {
    return view('welcome');
});

//route resource for products
Route::resource('/products', \App\Http\Controllers\TiketController::class);




