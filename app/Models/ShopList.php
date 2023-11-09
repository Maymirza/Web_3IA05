<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopList extends Model
{
    use HasFactory;

    protected $fillable = [
        'merk',
        'jenis_pakaian',
        'warna',
        'ukuran',
        'deskripsi',
        'harga',
    ];

}

