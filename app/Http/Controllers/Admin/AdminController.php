<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class AdminController extends BaseController
{
	protected $adminsPassFile;
	protected $admin;
	
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	public function __construct()
	{
		session_start();
		$this->adminsPassFile = $this->checkAdminsFile();
		if (array_key_exists('1', $this->adminsPassFile))
		{
			$this->admin = $this->findAdmin($this->adminsPassFile);
		}
		
	}
	
	public function checkAdminsFile(){
		$file = @file(__DIR__."\pswd.inc");
		if (!empty($file)) {
			foreach ($file as $v) {
	        	$admins[] = explode(' ', $v);
	    	}
	    	return $admins;
		}
		return [];
	}
	
	public function findAdmin($admins) 
	{
	    $admin_login = '';
	    $admin_paswrd = '';
	    if (array_key_exists('admin_login', $_SESSION) && array_key_exists('admin_passwd', $_SESSION)) {
	        $admin_login = $_SESSION['admin_login'];
	        $admin_paswrd = $_SESSION['admin_passwd'];
	        foreach ($admins as $a) {
	            if (($a[0] == $admin_login) && ($a[1]== $admin_paswrd)) {
	                return $admin_login;
	            }
	        }
	    }
	    return false;
	}
}