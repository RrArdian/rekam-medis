<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class PemindahanPasien extends Model
{
    protected $table = 'pemindahan_pasien';

    protected $hidden = ['created_at', 'updated_at'];

    public function pasien() 
    {
    	return $this->belongsTo('App\Http\Models\Pasien', 'pasien_id');
    }

    public function instansilama()
    {
    	return $this->belongsTo('App\Http\Models\Instansi', 'instansi_lama_id');
    }

    public function instansibaru()
    {
    	return $this->belongsTo('App\Http\Models\Instansi', 'instansi_baru_id');
    }

    public function menginap()
    {
    	return $this->hasOne('App\Http\Models\Menginap', 'pindahan_id');
    }
}
