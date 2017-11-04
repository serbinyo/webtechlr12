<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    public $timestamps = false;
    protected $fillable = ['page','ip','host','browser_name','date'];

    public function add_guest_statistic()
    {
        $this->page = $_SERVER["REQUEST_URI"];
        $this->ip = $_SERVER["REMOTE_ADDR"];
        $this->host = $_SERVER["HTTP_HOST"];
        $this->browser_name = $_SERVER["HTTP_USER_AGENT"];
        $this->date = date("Y-m-d H:i:s");
        $this->save();
    }

    public function show()
    {
        return $statistics = DB::table('Statistics')->orderBy('date', 'desc')->paginate(25);
    }
}
