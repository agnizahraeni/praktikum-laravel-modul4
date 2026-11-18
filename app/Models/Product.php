<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // 1. Menentukan nama tabel di database
    protected $table = 'products';

    // 2. Menentukan primary key tabel
    protected $primaryKey = 'id_product';

    // 3. Menentukan kolom yang diizinkan untuk diisi secara Mass Assignment
    protected $fillable = [
        'name_product',
        'stock_product',
        'price_product',
        'desc_product',
        'id_category',
    ];
}