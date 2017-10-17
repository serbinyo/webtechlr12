<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class IndexAdminController extends AdminController
{
	public function index()
	{
		return view('admin.index')->with(['admin'=>$this->admin, 'adminsPassFile'=>$this->adminsPassFile]);
	}
	
	public function auth(Request $request)
	{
		$data = $request->all();
		
		if(array_key_exists('go', $data)){
			$this->admin_login($request);
		}
		else{
			$this->admin_logout();
		}	
		
		return redirect('admin');
	}
	
	public function admin_login($request)
	{
		$this->validate($request,
			[
				'admin_login'=>'required',
				'admin_passwd'=>'required'
			],
			[
				'admin_login.required'=>'Необходимо указать логин администратора',
				'admin_passwd.required'=>'Необходимо указать пароль администратора'
			]);

		$data        = $request->all();
		
		$_SESSION['admin_login'] = htmlspecialchars(trim($data['admin_login']));
		$_SESSION['admin_passwd'] = htmlspecialchars(trim($data['admin_passwd']));
	
	}
		
	public function admin_logout()
	{
		session_destroy();	
	}
	
}
