<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Pengkajianumum extends Model
{
    protected $table = 'pengkajianumum';

    protected $hidden = ['created_at', 'updated_at'];

    public function pasien() 
    {
    	return $this->belongsTo('App\Http\Models\Pasien', 'pasien_id');
    }

    public function penanggungjawab() 
    {
    	return $this->belongsTo('App\Http\Models\Penanggungjawab', 'penanggungjawab_id');
    }

    public function statuskesehatan() 
    {
    	return $this->belongsTo('App\Http\Models\StatusKesehatan', 'status_kesehatan_id');
    }

    public function polakebutuhandasar() 
    {
    	return $this->belongsTo('App\Http\Models\PolaKebutuhanDasar', 'pola_kebutuhan_dasar_id');
    }

    public function polaaktivitas() 
    {
    	return $this->belongsTo('App\Http\Models\PolaAktivitas', 'pola_aktivitas_id');
    }
}
