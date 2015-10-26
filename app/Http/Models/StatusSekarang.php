<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class StatusSekarang extends Model
{
    protected $table = 'status_kesehatan';

    protected $hidden = ['created_at', 'updated_at'];

    public function status() 
    {
    	return $this->hasOne('App\Http\Models\StatusKesehatan', 'sekarang_id');
    }
}
