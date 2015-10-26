<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'kecamatan';

    protected $hidden = ['created_at', 'updated_at'];

    public function kabupaten() 
    {
    	return $this->belongsTo('App\Http\Models\Kabupaten', 'kabupaten_id');
    }

    public function penduduk()
    {
    	return $this->hasMany('App\Http\Models\Penduduk', 'kecamatan_id');
    }
}
