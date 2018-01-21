<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Statistic;
use App\User;

class Controller extends BaseController
{
	use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

	protected $user;

	public function __construct(User $userModel, Statistic $statisticModel)
	{
        session_start();
        $statisticModel->add_guest_statistic();
		$this->user = $userModel::findUser();
	}
}
