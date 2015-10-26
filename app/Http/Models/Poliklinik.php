<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Poliklinik extends Model
{
    protected $table = 'poliklinik';

    protected $hidden = ['created_at', 'updated_at'];

    public function dokter() 
    {
    	return $this->hasMany('App\Http\Models\Dokter', 'poliklinik_id');
    }
}
