<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class GuestbookloadfileAdminController extends AdminController
{
    public function guestbookloadfile()
	{
		return view('admin.guestbookloadfile')->with(['admin'=>$this->admin, 'admins'=>$this->admins]);
	}
}
