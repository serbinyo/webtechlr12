<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Admin;

class IndexAdminController extends AdminController
{
    public function index()
    {
        return view('admin.index')->with(['admin' => $this->admin, 'adminsPassFile' => $this->adminsPassFile]);
    }

    public function auth(Request $request, Admin $admin)
    {
        $data = $request->all();
        if (array_key_exists('go', $data)) {
            $response = $admin->admin_login($data);
            if (is_array($response) && array_key_exists('errors', $response)) {
                return back()->withInput()->withErrors($response['errors']);
            }
        } else {
            $admin->admin_logout();
        }
        return redirect('/admin');
    }
}
