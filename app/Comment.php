<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    public $timestamps = false;
    protected $fillable = ['blogid','author','body','date'];
}
