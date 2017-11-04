<?php

namespace App\Http\Controllers;

class StudyController extends Controller
{
    public function study()
    {
		return view('study')->with(['user'=> $this->user]);
	}
}
