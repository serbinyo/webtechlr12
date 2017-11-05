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
        $guestbookModel->store($request);
        return redirect('guestbook');
    }
}
