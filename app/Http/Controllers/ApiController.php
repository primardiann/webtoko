<?php

// ApiController.php
namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $numbers = range(1, 100); // membuat array berisi angka 1 sampai 100
        return response()->json($numbers);
    }

    public function getProduct()
    {
        $data = Produk::all();
        return response()->json($data);
    }
}

