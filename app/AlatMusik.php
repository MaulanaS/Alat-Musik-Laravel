<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlatMusik extends Model
{
    //
    protected $table = 'tbl_alatmusik';
    protected $fillable = ['nama_alat','merk','harga','stok'];
}
