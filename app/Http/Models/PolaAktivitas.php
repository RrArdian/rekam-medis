<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class PolaAktivitas extends Model
{
    protected $table = 'pola_aktivitas';

    protected $hidden = ['created_at', 'updated_at'];

    public function pengkajianumum() 
    {
    	return $this->hasOne('App\Http\Models\Pengkajianumum', 'pola_aktivitas_id');
    }
}
