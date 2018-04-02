<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Testresult;

class TestpageController extends Controller
{
    private $testresults = [];

    public function testpage()
    {
        return view('testpage')->with(['user' => $this->user, 'testresults' => $this->testresults]);
    }

    public function storeOrShow(Request $request, Testresult $testresultModel)
    {
        $data = $request->all();

        if (array_key_exists('fior', $data)) {
            $response = $testresultModel->show($data);
            if (is_array($response) && array_key_exists('errors', $response)) {
                return back()->withInput()->withErrors($response['errors']);
            }
            $this->testresults = $response;
        } else {
            $response = $testresultModel->store($data);
            if (is_array($response) && array_key_exists('errors', $response)) {
                return back()->withInput()->withErrors($response['errors']);
            }
        }
        return view('testpage')->with(['user' => $this->user, 'testresults' => $this->testresults]);
    }
}
