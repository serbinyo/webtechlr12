<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guestbook;

class GuestbookController extends Controller
{
	public function guestbook(Guestbook $guestbookModel)
	{
	    $tbl = $guestbookModel->show();
		return view('guestbook')->with(['user'=> $this->user, 'table'=>$tbl]);
	}

	public function store(Request $request, Guestbook $guestbookModel)
    {
        $data = $request->except('_token');
        $response = $guestbookModel->store($data);
        if (is_array($response) && array_key_exists('errors', $response)) {
            return back()->withInput()->withErrors($response['errors']);
        }
        return redirect('guestbook');
    }
}
