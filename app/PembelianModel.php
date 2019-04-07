<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PembelianModel extends Model
{
    protected $table = 'pembelian';
    public $timestamps = false;
    protected $primaryKey = 'id_pembelian';
}
