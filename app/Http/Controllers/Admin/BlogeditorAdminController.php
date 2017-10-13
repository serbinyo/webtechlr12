<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class BlogeditorAdminController extends AdminController
{
    public function blogeditor()
	{
		return view('admin.blogeditor')->with(['admin'=>$this->admin, 'admins'=>$this->admins]);
	}
}
