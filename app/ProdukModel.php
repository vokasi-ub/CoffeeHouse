<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProdukModel extends Model
{
    protected $table = 'produk';
    public $timestamps = false;
    protected $primaryKey = 'id_produk';
    protected $fillable = [
            'kategori_produk',
            'nama_produk',
            'harga_produk',
            'berat_produk',
            'foto_produk',
            'deskripsi_produk'
    ];
}
