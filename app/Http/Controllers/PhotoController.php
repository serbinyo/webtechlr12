<?php

namespace App\Http\Controllers;

class PhotoController extends Controller
{
    public function photo()
    {
		return view('photo')->with(['user'=> $this->user]);
	}
}
