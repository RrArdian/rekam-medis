<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    protected $table = 'penduduk';

    protected $hidden = ['created_at', 'updated_at'];

    public function user() 
    {
    	return $this->belongsTo('App\Http\Models\User', 'user_id');
    }

    public function pasien()
    {
    	return $this->hasMany('App\Http\Models\Pasien', 'penduduk_id');
    }

    public function kecamatan()
    {
        return $this->belongsTo('App\Http\Models\Kecamatan', 'kecamatan_id');
    }

    public function penanggungjawab()
    {
    	return $this->hasMany('App\Http\Models\Penanggungjawab', 'penduduk_id');
    }
}
