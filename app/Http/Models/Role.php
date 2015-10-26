<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $table = 'role';

    protected $hidden = ['created_at', 'updated_at'];

    public function users()
    {
        return $this->belongsToMany('App\Http\Models\User');
    }
}
