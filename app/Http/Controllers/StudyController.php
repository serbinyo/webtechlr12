<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyController extends Controller
{
    public function study(){
		return view('study')->with(['user'=> $this->user]);
	}
}
