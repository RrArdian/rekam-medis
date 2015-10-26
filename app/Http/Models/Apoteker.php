<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Apoteker extends Model
{
    protected $table = 'apoteker';

    protected $hidden = ['created_at', 'updated_at'];

    public function user() 
    {
    	return $this->belongsTo('App\Http\Models\User', 'user_id');
    }

    public function instansi() 
    {
    	return $this->belongsTo('App\Http\Models\Instansi', 'instansi_id');
    }
}
