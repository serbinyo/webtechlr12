<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;
use App\Statistic;

class Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	protected $user;
	
	public function __construct()
	{
		session_start();
		//$this->add_guest_statistic();
		$this->user = $this->findUser();
	}

	

	public static function add_guest_statistic()
	{
        $statistic = new Statistic;
        $statistic->page = $_SERVER["REQUEST_URI"];
        $statistic->ip = $_SERVER["REMOTE_ADDR"];
        $statistic->host = $_SERVER["HTTP_HOST"];
        $statistic->browser_name = $_SERVER["HTTP_USER_AGENT"];
        $statistic->date = date("Y-m-d H:i:s");
        $statistic->save();
	}

	public static function findUser()
	{
		$login   = '';
		$passwrd = '';
		if(array_key_exists('login', $_SESSION) && array_key_exists('passwd', $_SESSION))
		{
			$login   = $_SESSION['login'];
			$passwrd = $_SESSION['passwd'];
		}
		
		$user = DB::table('users')->where([
			['login',$login],
			['password',$passwrd]
			])->first();
		
		if(!empty($user))
		{
			return $user;
		}
		else
		{
			return false;
		}
	}
}
