<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Statistic;

class ReportController extends Controller
{
    public function index(Statistic $statisticModel)
    {
        $reports = $statisticModel->report();
        return view('report')->with(['user'=> $this->user, 'reports' => $reports]);
    }
}
