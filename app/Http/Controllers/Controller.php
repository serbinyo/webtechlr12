<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
	protected $user;
	
	public function __construct()
	{
		session_start();
		$this->add_guest_statistic();
		$this->user = $this->findUser();
	}

	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	public static function add_guest_statistic()
	{
//        $statistic = new StatisticsModel();
//        $statistic->page = $_SERVER["REQUEST_URI"];
//        $statistic->ip = $_SERVER["REMOTE_ADDR"];
//        $statistic->host = $_SERVER["HTTP_HOST"];
//        $statistic->browser_name = $_SERVER["HTTP_USER_AGENT"];
//        $statistic->save();
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

//	public static function HelloUser()
//	{
//		if(self::findUser())
//		{
//			$id   = self::findUser();
//			$user = UsersModel::find($id);
//			echo "<div class='login_form_container'>
//			Пользователь: $user->fio
//			</div>";
//		}
//	}


}
