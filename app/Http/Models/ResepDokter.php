<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ResepDokter extends Model
{
    protected $table = 'resep_dokter';

    protected $hidden = ['created_at', 'updated_at'];

    public function pasien() 
    {
    	return $this->belongsTo('App\Http\Models\Pasien', 'pasien_id');
    }

    public function dokter() 
    {
    	return $this->belongsTo('App\Http\Models\Dokter', 'dokter_id');
    }
}
