<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class HasilLaborat extends Model
{
    protected $table = 'hasil_laborat';

    protected $hidden = ['created_at', 'updated_at'];

    public function pasien() 
    {
    	return $this->belongsTo('App\Http\Models\Pasien', 'pasien_id');
    }
}
