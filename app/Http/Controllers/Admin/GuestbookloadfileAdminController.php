<?php

namespace App\Http\Controllers\Admin;

use App\Guestbook;

class GuestbookloadfileAdminController extends AdminController{
	public function guestbookloadfile()
    {
		return view('admin.guestbookloadfile')->with(['admin'=>$this->admin, 'adminsPassFile'=>$this->adminsPassFile, 'message'=>'']);
	}
	
	public function load(Guestbook $guestbookModel)
    {
        $guestbook = $guestbookModel->loadFromFile();
        return view('admin.guestbookloadfile')->with(['admin'=>$this->admin, 'adminsPassFile'=>$this->adminsPassFile, 'message'=>$guestbook]);
	}
}
