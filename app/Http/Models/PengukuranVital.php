<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class PengukuranVital extends Model
{
    protected $table = 'pengukuran_vital';

    protected $hidden = ['created_at', 'updated_at'];

    public function pasien() 
    {
    	return $this->belongsTo('App\Http\Models\Pasien', 'pasien_id');
    }
}
