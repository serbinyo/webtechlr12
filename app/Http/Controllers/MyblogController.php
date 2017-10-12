<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class MyblogController extends Controller
{
	
    public function myblog()
    {    	
		$articles = DB::table('Blogarticles')->orderBy('date', 'desc')->paginate(5);
		$comments = DB::table('Comments')->orderBy('date', 'desc')->get();
		return view('myblog')->with(['user'=> $this->user,'articles'=>$articles, 'comments'=>$comments]);
	}
}
