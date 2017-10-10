<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterestsController extends Controller
{
    public function interests(){
		return view('interests');
	}
}
