<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OngkirModel extends Model
{
    protected $table = 'ongkir';
    public $timestamps = false;
    protected $primaryKey = 'id_ongkir';
}
