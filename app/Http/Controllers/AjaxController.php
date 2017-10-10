<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function commentsend(Request $request){
		$data = $request->all();
		if (array_key_exists('text', $data)){
			echo 'yes';
		} else {
			echo 'no';
		}
	}
}
