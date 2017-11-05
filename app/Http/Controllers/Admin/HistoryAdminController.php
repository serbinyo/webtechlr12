<?php

namespace App\Http\Controllers\Admin;

class HistoryAdminController extends AdminController
{
    public function history()
	{
		return view('admin.history')->with(['admin'=>$this->admin, 'adminsPassFile'=>$this->adminsPassFile]);
	}
}
