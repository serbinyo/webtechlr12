<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Admin;

class AdminController extends BaseController
{
	protected $adminsPassFile;
	protected $admin;
	
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	public function __construct(Admin $adminModel)
	{
		session_start();
		$this->adminsPassFile = $adminModel->checkAdminsFile();
		if (array_key_exists('1', $this->adminsPassFile))
		{
			$this->admin = $adminModel->findAdmin($this->adminsPassFile);
		}
	}
}