<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogarticle extends Model
{
	public $timestamps = false;
    protected $fillable = ['date','title','image','body'];
}
