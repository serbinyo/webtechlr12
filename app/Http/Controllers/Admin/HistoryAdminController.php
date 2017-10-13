<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class HistoryAdminController extends AdminController
{
    public function history()
	{
		return view('admin.history')->with(['admin'=>$this->admin, 'admins'=>$this->admins]);
	}
}
