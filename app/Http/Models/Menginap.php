<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Menginap extends Model
{
    protected $table = 'menginap';

    protected $hidden = ['created_at', 'updated_at'];

    public function pasien() 
    {
    	return $this->belongsTo('App\Http\Models\Pasien', 'pasien_id');
    }

    public function bangsal() 
    {
    	return $this->belongsTo('App\Http\Models\Bangsal', 'bangsal_id');
    }

    public function ruang() 
    {
    	return $this->belongsTo('App\Http\Models\Ruang', 'ruang_id');
    }

    public function pindahan() 
    {
    	return $this->belongsTo('App\Http\Models\PemindahanPasien', 'pindahan_id');
    }
}
