<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillabe=[
    	'title','photo','category_id','content'
    ];
}
