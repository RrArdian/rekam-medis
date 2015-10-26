<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class PengkajianJatuh extends Model
{
    protected $table = 'pengkajian_jatuh';

    protected $hidden = ['created_at', 'updated_at'];

    public function pasien() 
    {
    	return $this->belongsTo('App\Http\Models\Pasien', 'pasien_id');
    }
}
