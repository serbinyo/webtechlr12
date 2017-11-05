<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function checkAdminsFile()
    {
        $file = @file(__DIR__."\pswd.inc");
        if (!empty($file)) {
            foreach ($file as $v) {
                $admins[] = explode(' ', $v);
            }
            return $admins;
        }
        return [];
    }

    public function findAdmin($admins)
    {
        if (array_key_exists('admin_login', $_SESSION) && array_key_exists('admin_passwd', $_SESSION)) {
            $admin_login = $_SESSION['admin_login'];
            $admin_paswrd = $_SESSION['admin_passwd'];
            foreach ($admins as $a) {
                if (($a[0] == $admin_login) && ($a[1]== $admin_paswrd)) {
                    return $admin_login;
                }
            }
        }
        return false;
    }

    public function admin_login($request)
    {
        $this->validate($request,
            [
                'admin_login'=>'required',
                'admin_passwd'=>'required'
            ],
            [
                'admin_login.required'=>'Необходимо указать логин администратора',
                'admin_passwd.required'=>'Необходимо указать пароль администратора'
            ]);

        $data        = $request->all();

        $_SESSION['admin_login'] = htmlspecialchars(trim($data['admin_login']));
        $_SESSION['admin_passwd'] = htmlspecialchars(trim($data['admin_passwd']));

    }

    public function admin_logout()
    {
        session_destroy();
    }
}
