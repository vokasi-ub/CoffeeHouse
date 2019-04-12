<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\KategoriModel;
use App\ProdukModel;
use App\OngkirModel;
use App\PembelianModel;
use App\PelangganModel;


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

public function kategori()
{
    return $this->belongsTo(KategoriModel::class, 'kategori_produk', 'id_kategori');
}


}

