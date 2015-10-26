<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';

    protected $hidden = ['created_at', 'updated_at'];

    public function instansi() 
    {
    	return $this->hasMany('App\Http\Models\Instansi', 'kategori_id');
    }
}
