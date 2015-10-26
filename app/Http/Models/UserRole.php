<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $table = 'role_user';

    protected $hidden = ['created_at', 'updated_at'];

    public function user() 
    {
    	return $this->belongsTo('App\Http\Models\User', 'user_id');
    }

    public function role() 
    {
    	return $this->belongsTo('App\Http\Models\Role', 'role_id');
    }
}
