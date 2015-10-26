<?php

namespace App\Http\Models;
use Illuminate\Database\Eloquent\Model;

class Penanggungjawab extends Model
{
    protected $table = 'penanggungjawab';

    protected $hidden = ['created_at', 'updated_at'];

    public function pasien() 
    {
    	return $this->belongsTo('App\Http\Models\Pasien', 'pasien_id');
    }

    public function penduduk() 
    {
    	return $this->belongsTo('App\Http\Models\Penduduk', 'penduduk_id');
    }
}
