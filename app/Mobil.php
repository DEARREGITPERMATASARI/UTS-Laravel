<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    protected $table = "mobils";
    protected $fillable = ["nama", "merk", "bahan_bakar", "plat_nomer", "warna","jumlah"];
}
