<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Bangsal extends Model
{
    protected $table = 'bangsal';

    protected $hidden = ['created_at', 'updated_at'];

    public function instansi() 
    {
    	return $this->belongsTo('App\Http\Models\Instansi', 'instansi_id');
    }
}
