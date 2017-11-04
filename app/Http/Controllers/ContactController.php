<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;

class ContactController extends Controller
{
	public function contact()
	{
		return view('contact')->with(['user'=> $this->user]);
	}

	public function send(Request $request, Email $contactModel)
	{
	    $contactModel->send($request);
        return redirect('contact');
	}

}
