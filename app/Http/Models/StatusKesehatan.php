<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class StatusKesehatan extends Model
{
    protected $table = 'status_kesehatan';

    protected $hidden = ['created_at', 'updated_at'];

    public function sekarang() 
    {
    	return $this->belongsTo('App\Http\Models\StatusSekarang', 'sekarang_id');
    }

    public function terdahulu() 
    {
    	return $this->belongsTo('App\Http\Models\StatusTerdahulu', 'terdahulu_id');
    }

    public function pengkajianumum()
    {
    	return $this->hasOne('App\Http\Models\Pengkajianumum', 'status_kesehatan_id');
    }
}
