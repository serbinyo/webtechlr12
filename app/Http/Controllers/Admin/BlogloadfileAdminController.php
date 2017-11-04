<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Blogarticle;

class BlogloadfileAdminController extends AdminController
{
    public function blogloadfile()
	{
		return view('admin.blogloadfile')->with(['admin'=>$this->admin, 'adminsPassFile'=>$this->adminsPassFile,'message'=>'']);
	}
	
	public function load(Blogarticle $blogarticleModel)
    {
        $result = $blogarticleModel->loadFromFile();
        return view('admin.blogloadfile')->with(['admin'=>$this->admin, 'adminsPassFile'=>$this->adminsPassFile,'message'=>$result]);
    }

}
