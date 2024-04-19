<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking extends Model
{
    use HasFactory;
    protected $table = 'tb_tracking';

    public function outlet_b_org () {
        return $this->belongsTo(Outlet::class, 'id_b_org', 'id');
    }
    public function outlet_a_org () {
        return $this->belongsTo(Outlet::class, 'id_a_org', 'id');
    }
    public function outlet_gw_org () {
        return $this->belongsTo(Outlet::class, 'id_gw_org', 'id');
    }
}
