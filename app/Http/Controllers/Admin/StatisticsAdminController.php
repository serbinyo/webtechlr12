<?php

namespace App\Http\Controllers\Admin;

use App\Statistic;

class StatisticsAdminController extends AdminController
{
    public function statistics(Statistic $statisticModel)
	{
		$statistics = $statisticModel->show();
		return view('admin.statistics')->with(['admin'=>$this->admin, 'adminsPassFile'=>$this->adminsPassFile, 'statistics'=>$statistics]);
	}
}
