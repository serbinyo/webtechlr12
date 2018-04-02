<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;

class ContactController extends Controller
{
    public function contact()
    {
        return view('contact')->with(['user' => $this->user]);
    }

    public function send(Request $request, Email $contactModel)
    {
        $data = $request->except('_token');
        $response = $contactModel->send($data);
        if (is_array($response) && array_key_exists('errors', $response)) {
            return back()->withInput()->withErrors($response['errors']);
        }
        return redirect('contact');
    }
}
