<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $table = 'provinsi';

    protected $hidden = ['created_at', 'updated_at'];

    public function kabupaten() 
    {
    	return $this->hasMany('App\Http\Models\Kabupaten', 'provinsi_id');
    }

    public function adminprovinsi() 
    {
    	return $this->hasMany('App\Http\Models\AdminProvinsi', 'provinsi_id');
    }
}
