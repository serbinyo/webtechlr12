<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function registration()
    {
		return view('registration')->with(['user'=> $this->user]);
	}
	
	public function addUser(Request $request)
	{
		$this->validate($request,[
				'fio'=>['required','regex:/^[а-яА-Я_]+\s[а-яА-Я_]+\s[а-яА-Я_]+$/ui'],
				'email'=>'required|email',
				'login' => ''
				'password'=>'required',
			],[
			
			]);
		
	}
}
