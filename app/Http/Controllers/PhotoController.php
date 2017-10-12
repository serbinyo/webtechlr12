<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function photo(){
		return view('photo')->with(['user'=> $this->user]);
	}
}
