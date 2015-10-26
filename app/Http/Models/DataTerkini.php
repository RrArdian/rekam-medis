<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class DataTerkini extends Model
{
    protected $table = 'data_terkini';

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
