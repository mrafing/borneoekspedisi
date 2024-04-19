<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;
    protected $table = 'tb_outlets';

    public function kecamatan () {
        return $this->belongsTo(Kecamatan::class, 'id_kecamatan', 'id');
    }

    public function tracking_id_b_org () {
        return $this->hasMany(Tracking::class, 'id_b_org', 'id');
    }
    public function tracking_id_a_org () {
        return $this->hasMany(Tracking::class, 'id_a_org', 'id');
    }

    public function tracking_id_gw_org () {
        return $this->hasMany(Tracking::class, 'id_gw_org', 'id');
    }
}
