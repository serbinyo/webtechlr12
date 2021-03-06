<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Statistic;

class ExamController extends Controller
{
    public function index(Statistic $statisticModel)
    {
        $statistics = $statisticModel->show();
        $reports = $statisticModel->report();
        return view('exam')->with(['user'=> $this->user, 'statistics'=>$statistics, 'reports' => $reports]);
    }
}
