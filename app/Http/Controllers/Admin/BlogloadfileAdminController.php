<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class BlogloadfileAdminController extends AdminController
{
    public function blogloadfile()
	{
		return view('admin.blogloadfile')->with(['admin'=>$this->admin, 'admins'=>$this->admins]);
	}
}
