<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Instansi extends Model
{
    protected $table = 'instansi';

    protected $hidden = ['created_at', 'updated_at'];

    public function kategori() 
    {
    	return $this->belongsTo('App\Http\Models\Kategori', 'kategori_id');
    }

    public function kecamatan() 
    {
    	return $this->belongsTo('App\Http\Models\Kecamatan', 'kecamatan_id');
    }

    public function bangsal()
    {
    	return $this->hasMany('App\Http\Models\Bangsal', 'instansi_id');
    }

    public function apoteker()
    {
    	return $this->hasMany('App\Http\Models\Apoteker', 'instansi_id');
    }

    public function admininstansi()
    {
    	return $this->hasMany('App\Http\Models\AdminInstansi', 'instansi_id');
    }

    public function operator()
    {
    	return $this->hasMany('App\Http\Models\Operator', 'instansi_id');
    }
}
