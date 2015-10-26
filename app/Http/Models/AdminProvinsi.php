<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class AdminProvinsi extends Model
{
    protected $table = 'admin_provinsi';

    protected $hidden = ['created_at', 'updated_at'];

    public function user() 
    {
    	return $this->belongsTo('App\Http\Models\User', 'user_id');
    }

    public function provinsi() 
    {
    	return $this->belongsTo('App\Http\Models\Provinsi', 'provinsi_id');
    }
}
