<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class PolaKebutuhanDasar extends Model
{
    protected $table = 'pola_kebutuhan_dasar';

    protected $hidden = ['created_at', 'updated_at'];

    public function pengkajianumum() 
    {
    	return $this->hasOne('App\Http\Models\Pengkajianumum', 'pola_kebutuhan_dasar_id');
    }
}
