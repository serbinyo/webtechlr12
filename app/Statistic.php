<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    public $timestamps = false;
    protected $fillable = ['page', 'ip', 'host', 'browser_name', 'date'];

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

    public function report()
    {
        $index = DB::table('Statistics')->where('page', '/index')->count();
        $study = DB::table('Statistics')->where('page', '/study')->count();
        $photo = DB::table('Statistics')->where('page', '/photo')->count();
        $interests = DB::table('Statistics')->where('page', '/interests')->count();
        $about = DB::table('Statistics')->where('page', '/about')->count();
        $contact = DB::table('Statistics')->where('page', '/contact')->count();
        $myblog = DB::table('Statistics')->where('page', '/myblog')->count();
        $guestbook = DB::table('Statistics')->where('page', '/guestbook')->count();
        $stat = DB::table('Statistics')->where('page', '/stat')->count();
        $exam = DB::table('Statistics')->where('page', '/exam')->count();


        $report = [
            $index => 'index',
            $study => 'study',
            $photo => 'photo',
            $interests => 'interests',
            $about => 'about',
            $contact => 'contact',
            $myblog => 'myblog',
            $guestbook => 'guestbook',
            $stat => 'stat',
            $exam => 'exam'
        ];
        
        krsort($report);
        return $report;
    }
}
