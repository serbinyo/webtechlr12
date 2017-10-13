<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class StatisticsAdminController extends AdminController
{
    public function statistics()
	{
		$statistics = DB::table('Statistics')->orderBy('date', 'desc')->paginate(25);
		return view('admin.statistics')->with(['admin'=>$this->admin, 'admins'=>$this->admins, 'statistics'=>$statistics]);
	}
}
