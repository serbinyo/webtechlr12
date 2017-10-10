<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class testresult extends Model
{
    public $timestamps = false;
    protected $fillable = ['date','fio','groupname','answer1','result1','answer2','result2','answer3','result3','mark'];
}
