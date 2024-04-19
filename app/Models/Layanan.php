<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $table = 'tb_layanan';

    public function hargaOngkir() {
        return $this->hasMany(HargaOngkir::class, 'id_layanan', 'id');
    }
}
