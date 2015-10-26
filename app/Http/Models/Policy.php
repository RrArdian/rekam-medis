<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    protected $table = 'policy';

    protected $hidden = ['created_at', 'updated_at'];

    public function users() 
    {
    	return $this->belongsToMany('App\Http\Models\User', 'user_id');
    }
}
