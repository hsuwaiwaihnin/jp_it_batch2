<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $fillabe=[
    	'name'
    ];

    public function staff()
    {
        return $this->hasMany('App\Staff');
    }
}
