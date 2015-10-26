<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Ruang extends Model
{
    protected $table = 'ruang';

    protected $hidden = ['created_at', 'updated_at'];

    public function menginap() 
    {
    	return $this->hasOne('App\Http\Models\Menginap', 'ruang_id');
    }
}
