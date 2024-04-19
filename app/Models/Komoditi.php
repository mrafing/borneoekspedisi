<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komoditi extends Model
{
    use HasFactory;
    protected $table = 'tb_komoditi';

    public function hargaOngkir() {
        return $this->hasMany(HargaOngkir::class, 'id_komoditi', 'id');
    }
}
