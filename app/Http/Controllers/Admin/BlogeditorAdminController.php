<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class BlogeditorAdminController extends AdminController
{
    public function blogeditor()
	{
		$articles = DB::table('Blogarticles')->orderBy('date', 'desc')->paginate(5);
		
		return view('admin.blogeditor')->with(['admin'=>$this->admin, 'adminsPassFile'=>$this->adminsPassFile, 'articles'=>$articles]);
	}
}
