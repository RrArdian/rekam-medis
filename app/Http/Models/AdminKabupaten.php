<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class AdminKabupaten extends Model
{
    protected $table = 'admin_kabupaten';

    protected $hidden = ['created_at', 'updated_at'];

    public function user() 
    {
    	return $this->belongsTo('App\Http\Models\User', 'user_id');
    }

    public function kabupaten() 
    {
    	return $this->belongsTo('App\Http\Models\Kabupaten', 'kabupaten_id');
    }
}
