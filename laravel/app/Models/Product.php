<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $table = 'product';
    protected $primaryKey = 'id_produk';
    protected $fillable = [
        'nama_produk',
        'deskripsi',
        'harga',
        'tipe_produk'
    ];

}
