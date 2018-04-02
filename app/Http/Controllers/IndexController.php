<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class IndexController extends Controller
{
    public function index()
    {
		return view('index')->with(['user'=> $this->user]);
	}
	
	public function auth(Request $request, User $userModel)
	{
		$data = $request->all();
		if(array_key_exists('go', $data)){
            $response = $userModel->login($data);
            if (is_array($response) && array_key_exists('errors', $response)) {
                return back()->withInput()->withErrors($response['errors']);
            }
		}
		else{
            $userModel->logout();
		}
		return redirect('/');
	}
}
