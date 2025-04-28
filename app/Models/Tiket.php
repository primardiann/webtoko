<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class Tiket extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'description',
        'price',
        'stock',
    ];

     // Properti tambahan
    protected $additionalAttributes = [
        'formatted_price',
        'in_stock',
    ];

    // Method untuk mendapatkan harga yang diformat
    public function getFormattedPriceAttribute()
    {
        return "Rp " . number_format($this->price, 2, ',', '.');
    }

    // Method untuk memeriksa apakah tiket masih tersedia
    public function getInStockAttribute()
    {
        return $this->stock > 0 ? 'In Stock' : 'Out of Stock';
    }

    // Method untuk mengurangi stok tiket setelah pembelian
    public function reduceStock($quantity)
    {
        if ($quantity > $this->stock) {
            return false; // Jika stok tidak mencukupi
        }

        $this->stock -= $quantity;
        $this->save();

        return true;
    }

    // Method untuk menambah stok tiket
    public function addStock($quantity)
    {
        $this->stock += $quantity;
        $this->save();
    }

}
