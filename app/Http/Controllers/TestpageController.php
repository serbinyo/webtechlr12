<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Testresult;

class TestpageController extends Controller
{
	private $testresults = [];

	public function testpage()
	{
		return view('testpage')->with(['user'=> $this->user, 'testresults'=>$this->testresults]);;
	}

	public function storeOrShow(Request $request)
	{
		$data = $request->all();

		if(array_key_exists('fior', $data)){
			$this->testresults = $this->show($request);
		}
		else
		{
			$this->store($request);
		}

		return view('testpage')->with(['testresults'=>$this->testresults]);
	}

	public function show($request)
	{
		$this->validate($request,
			[
				'fior'=>[
					'required',
					'regex:/^[а-яА-Я_]+\s[а-яА-Я_]+\s[а-яА-Я_]+$/ui',
					'exists:testresults,fio'
					],
			],
			[
				'fior.required'=>'Необходимо указать ФИО',
				'fior.regex'=>'Ф.И.О. должно состоять из 3-х слов кириллицей, разделенных пробелом',
				'fior.exists'=>'Персона не найдена'
			]);

		$data        = $request->all();
		$fio         = htmlspecialchars(trim($data['fior']));
		$testresults = DB::table('testresults')->where('fio',$fio)->orderBy('date', 'desc')->get();

		return $testresults;
	}

	public function store($request)
	{
		$this->validate($request,
			[
				'fio_php'=>['required','regex:/^[а-яА-Я_]+\s[а-яА-Я_]+\s[а-яА-Я_]+$/ui'],
				'groupname'=>'required',
				'ans1_php'=>'regex:/^[а-яА-Я_ ]+$/ui',
				'ans2_php'=>['required','regex:/^\-?\d+$/'],
				'ans3_php'=>'required'
			],
			[
				'fio_php.required'=>'Необходимо указать ФИО',
				'fio_php.regex'=>'Ф.И.О. должно состоять из 3-х слов кириллицей, разделенных пробелом',
				'groupname.required'=>'Необходимо указать номер группы',
				'ans1_php.regex'=>'Необходимо выбрать ответ на вопрос 1',
				'ans2_php.required'=>'Необходимо ввести ответ на вопрос 2',
				'ans2_php.regex'=>'Введите целочисленное значение',
				'ans3_php.required'=>'Необходимо выбрать ответ на вопрос 3'
			]);

		$data       = $request->all();
		$res        = $this->CountTestResult($data);
		$date       = date("Y-m-d H:i:s");

		$result     = [
			'date' => $date,
			'fio' => $data['fio_php'],
			'groupname'=>$data['groupname'],
			'answer1'=>$data['ans1_php'],
			'result1'=>$res['result1'],
			'answer2'=>$data['ans2_php'],
			'result2'=>$res['result2'],
			'answer3'=>$data['ans3_php'],
			'result3'=>$res['result3'],
			'mark'=>$res['mark']
		];

		$testresult = new Testresult;
		$testresult->fill($result);
		$testresult->save();

	}

	public function CountTestResult($data)
	{

		$ans1   = $data['ans1_php'];
		$ans2   = $data['ans2_php'];
		$ans3   = $data['ans3_php'];
		$marker = 0;

		if($ans1 !== null & $ans2 !== null & $ans3 !== null)
		{
			if($ans1 === 'Система типов данных')
			{
				$results['result1'] = "ДА";
				$marker++;
			}
			else
			{
				$results['result1'] = "НЕТ";
			}
			if($ans2 === '3072')
			{
				$results['result2'] = "ДА";
				$marker++;
			}
			else
			{
				$results['result2'] = "НЕТ";
			}
			if($ans3 === 'Никлаус Вирт')
			{
				$results['result3'] = "ДА";
				$marker++;
			}
			else
			{
				$results['result3'] = "НЕТ";
			}
			switch($marker)
			{
				case 0: $mark = "Провал!";
				break;
				case 1: $mark = "Удовлетворительно";
				break;
				case 2: $mark = "Хорошо";
				break;
				case 3: $mark = "Отлично!";
				break;
			}
		}

		$result = [
			'result1'=>$results['result1'],
			'result2'=>$results['result2'],
			'result3'=>$results['result3'],
			'mark'=>$mark
		];

		return $result;
	}
}
