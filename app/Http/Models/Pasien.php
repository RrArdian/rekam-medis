<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien';

    protected $hidden = ['created_at', 'updated_at'];

    public function penduduk() 
    {
    	return $this->belongsTo('App\Http\Models\Penduduk', 'penduduk_id');
    }

    public function instansi() 
    {
    	return $this->belongsTo('App\Http\Models\Instansi', 'instansi_id');
    }

    public function ortu() 
    {
    	return $this->belongsTo('App\Http\Models\Penduduk', 'ortu_id');
    }

    public function dataterkini()
    {
    	return $this->hasOne('App\Http\Models\DataTerkini', 'pasien_id');
    }

    public function hasillaborat()
    {
    	return $this->hasOne('App\Http\Models\HasilLaborat', 'pasien_id');
    }

    public function pengkajianumum()
    {
    	return $this->hasOne('App\Http\Models\Pengkajianumum', 'pasien_id');
    }

    public function pengkajiajatuh()
    {
    	return $this->hasOne('App\Http\Models\PengkajiaJatuh', 'pasien_id');
    }

    public function pengkajianvital()
    {
    	return $this->hasOne('App\Http\Models\PengkajianVital', 'pasien_id');
    }

    public function resepdokter()
    {
    	return $this->hasOne('App\Http\Models\ResepDokter', 'pasien_id');
    }
}
