<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
	public function contact()
	{
		return view('contact')->with(['user'=> $this->user]);
	}

	public function send(Request $request)
	{

		$this->validate($request, 
			[
				'fio'=>['required','regex:/^[а-яА-Я_]+\s[а-яА-Я_]+\s[а-яА-Я_]+$/ui'],
				'gender'=>'required',
				'form_age'=>'required',
				'form_email'=>'required',
				'form_email'=>'email',
				'form_tel' =>['required','regex:/^\+(3|7)[0-9]{8,10}$/'],
				'birthday'=>'required',
				'message'=>'required',
			],
			[
				'fio.required' => 'Необходимо указать ФИО',
				'fio.regex' => 'Ф.И.О. должно состоять из 3-х слов кириллицей, разделенных пробелом',
				'gender.required' => 'Необходимо указать пол',
				'form_age.required'  => 'Необходимо указать возраст',
				'form_email.required' => 'Необходимо указать email',
				'form_email.email' => 'Неверно указан email',
				'form_tel.required' => 'Необходимо указать номер телефона',
				'form_tel.regex' => 'Телефон должен начинаться на +7 или +3 и иметь от 9 до 11 цифр',
				'birthday.required'  => 'Необходимо указать дату рождения',
				'message.required'  => 'Необходимо написать сообщение'

			]);

		$data = $request->all();

		$this->sendMail($data);

		return redirect('contact');
	}

	function sendMail($data)
	{
		$fio        = htmlspecialchars(trim($data['fio']));
		$gender     = htmlspecialchars(trim($data['gender']));
		$form_age   = htmlspecialchars(trim($data['form_age']));
		$form_email = htmlspecialchars(trim($data['form_email']));
		$form_tel   = htmlspecialchars(trim($data['form_tel']));
		$message    = htmlspecialchars(trim($data['message']));

		mail("serbinyo@gmail.com", "Сайт Сербина", "$fio\n\r$gender $form_age\n\r$form_email\n\r$form_tel\n\r\n\rСообщение:\n\r$message");
	}
}
