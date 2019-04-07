<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';
    public $timestamps = false;
    protected $primaryKey = 'id_kategori';
}
