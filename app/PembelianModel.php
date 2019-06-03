<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\PelangganModel;

class PembelianModel extends Model
{
    protected $table = 'pembelian';
    public $timestamps = false;
    protected $primaryKey = 'id_pembelian';
    protected $fillable = [
        'nama_produk',
        'nama_pembeli',
        'no_telepon',
        'harga',
        'berat',
        'jumlah',
        'tarif',
        'alamat_pengiriman'
];

public function ongkir()
{
    return $this->belongsTo(OngkirModel::class, 'tarif', 'id_ongkir');
}    

}
