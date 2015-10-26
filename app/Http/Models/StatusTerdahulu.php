<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class StatusTerdahulu extends Model
{
    protected $table = 'status_terdahulu';

    protected $hidden = ['created_at', 'updated_at'];

    public function status() 
    {
    	return $this->hasOne('App\Http\Models\StatusKesehatan', 'terdahulu_id');
    }
}