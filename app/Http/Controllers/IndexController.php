<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Testresult;

class IndexController extends Controller
{
    public function index(){
		
//		$testresult = Testresult::select('id','fio','mark')->get();
//		dump($testresult);
		
		return view('index');
		
	}
}
