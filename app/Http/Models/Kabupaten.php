<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $table = 'kabupaten';

    protected $hidden = ['created_at', 'updated_at'];

    public function provinsi() 
    {
    	return $this->belongsTo('App\Http\Models\Provinsi', 'provinsi_id');
    }

    public function kecamatan()
    {
    	return $this->hasMany('App\Http\Models\Kecamatan', 'kabupaten_id');
    }

    public function adminkabupaten()
    {
        return $this->hasMany('App\Http\Models\AdminKabupaten', 'kabupaten_id');
    }
}
