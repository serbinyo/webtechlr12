<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

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
				'login' => ['required','unique:users,login'],
				'password'=>'required'
			],[
				'fio.required'=>'Не заполненно поле ФИО',
				'fio.regex'=>'Ф.И.О. должно состоять из 3-х слов кириллицей, разделенных пробелом',
				'email.required'=>'Не заполненно поле email',
				'email.email' => 'Неверно указан email',
				'login.required' => 'Не заполненно поле Логин',
				'login.unique' => 'Логин занят',
				'password.required'=>'Не заполненно поле Пароль'
			]);

		$data     = $request->all();
		$reg_date = date("Y-m-d H:i:s");
		$fio      = htmlspecialchars(trim($data['fio']));
		$email    = htmlspecialchars(trim($data['email']));
		$login    = htmlspecialchars(trim($data['login']));
		$password = htmlspecialchars(trim($data['password']));

		$newUser  = [
			'fio' => $fio,
			'email' => $email,
			'login' => $login,
			'password' => $password,
			'reg_date' => $reg_date
		];
		
		$user = new User;
		$user->fill($newUser);
		$user->save();
		
		$_SESSION['login'] = $login;
		$_SESSION['passwd'] = $password;
		
		return redirect('/');

	}
}
