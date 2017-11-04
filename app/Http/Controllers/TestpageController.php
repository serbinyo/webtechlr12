<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Testresult;

class TestpageController extends Controller
{
	private $testresults = [];

	public function testpage()
	{
		return view('testpage')->with(['user'=> $this->user, 'testresults'=>$this->testresults]);
	}

	public function storeOrShow(Request $request, Testresult $testresultModel)
	{
		$data = $request->all();

		if(array_key_exists('fior', $data)){
			$this->testresults = $testresultModel->show($request);
		}
		else
		{
            $testresultModel->store($request);
		}
		return view('testpage')->with(['user'=> $this->user, 'testresults'=>$this->testresults]);
	}
}
