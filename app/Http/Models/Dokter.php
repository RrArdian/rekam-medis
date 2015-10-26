<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    protected $table = 'dokter';

    protected $hidden = ['created_at', 'updated_at'];

    public function user() 
    {
    	return $this->belongsTo('App\Http\Models\User', 'user_id');
    }

    public function instansi() 
    {
    	return $this->belongsTo('App\Http\Models\Instansi', 'instansi_id');
    }

    public function poliklinik()
    {
    	return $this->belongsTo('App\Http\Models\Poliklinik', 'poliklinik_id');
    }

    public function dataterkini()
    {
    	return $this->hasMany('App\Http\Models\Dokter', 'dokter_id');
    }

    public function resepdokter()
    {
    	return $this->hasOne('App\Http\Models\ResepDokter', 'dokter_id');
    }
}
