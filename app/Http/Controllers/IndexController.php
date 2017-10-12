<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
		return view('index')->with(['user'=> $this->user]);
	}
	
	public function auth(Request $request)
	{
			
		$data = $request->all();
		
		if(array_key_exists('go', $data)){
			$this->login($request);
		}
		else{
			$this->logout();
		}	
		
		return redirect('/');	
		
	}
	
	public function login($request)
	{
		$this->validate($request,
			[
				'login'=>[
					'required',
					'exists:users,login'
					],
				'passwd'=>[
					'required',
					'exists:users,password'
					]
			],
			[
				'login.required'=>'Необходимо указать логин',
				'login.exists'=>'Неверный ввод, попробуйте еще раз',
				'passwd.required'=>'Необходимо указать пароль',
				'passwd.exists'=>'Неверный ввод, попробуйте еще раз'
			]);

		$data        = $request->all();
		
		$_SESSION['login'] = htmlspecialchars(trim($data['login']));
		$_SESSION['passwd'] = htmlspecialchars(trim($data['passwd']));
	
	}
		
	public function logout()
	{
		session_destroy();	
	}
}
