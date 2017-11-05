<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Response;

class User extends Model
{
    public $timestamps = false;
    protected $fillable = ['reg_date','fio','email','login','password'];

    public function addUser($request){
        $this->validate($request,[
            'fio'=>['required','regex:/^[а-яА-Я_]+\s[а-яА-Я_]+\s[а-яА-Я_]+$/ui'],
            'email'=>'required|email',
            'login' => ['required','unique:users,login'],
            'password'=>'required'
        ],[
            'fio.required'=>'Не заполненно поле ФИО',
            'fio.regex'=>'Ф.И.О. должно состоять из 3-х слов кириллицей, разделенных пробелом',
            'email.required'=>'Не заполненно поле email',
            'email.email' => 'Неверно указан email',
            'login.required' => 'Не заполненно поле Логин',
            'login.unique' => 'Логин занят',
            'password.required'=>'Не заполненно поле Пароль'
        ]);
        $data     = $request->all();
        $reg_date = date("Y-m-d H:i:s");
        $fio      = htmlspecialchars(trim($data['fio']));
        $email    = htmlspecialchars(trim($data['email']));
        $login    = htmlspecialchars(trim($data['login']));
        $password = htmlspecialchars(trim($data['password']));
        $password = md5($password);
        $newUser  = [
            'fio' => $fio,
            'email' => $email,
            'login' => $login,
            'password' => $password,
            'reg_date' => $reg_date
        ];
        $this->fill($newUser);
        $this->save();
        $_SESSION['login'] = $login;
        $_SESSION['passwd'] = $password;
    }

    public static function findUser()
    {
        $login   = '';
        $passwrd = '';
        if(array_key_exists('login', $_SESSION) && array_key_exists('passwd', $_SESSION))
        {
            $login   = $_SESSION['login'];
            $passwrd = $_SESSION['passwd'];
        }
        $user = DB::table('users')->where([
            ['login',$login],
            ['password',$passwrd]
        ])->first();
        if(!empty($user))
        {
            return $user;
        }
        else
        {
            return false;
        }
    }

    public function login($request)
    {
        $request['passwd'] = md5($request['passwd']);
        $this->validate($request,
            [
                'login'=>[
                    'required',
                    'exists:users,login'
                ],
                'passwd'=>[
                    'required',
                    'exists:users,password'
                ]
            ],
            [
                'login.required'=>'Необходимо указать логин',
                'login.exists'=>'Неверный логин, попробуйте еще раз',
                'passwd.required'=>'Необходимо указать пароль',
                'passwd.exists'=>'Неверный пароль, попробуйте еще раз'
            ]);
        $data        = $request->all();
        $_SESSION['login'] = htmlspecialchars(trim($data['login']));
        $_SESSION['passwd'] = htmlspecialchars(trim($data['passwd']));
    }

    public function logout()
    {
        session_destroy();
    }

    public function loginCheck($request)
    {
        $data = $request->all();
        $name = htmlspecialchars(trim($data['login']));
        $login = DB::table('users')->where('login', $name)->first();
        if(empty($login)){
            return Response::json(['success'=>true]);
        }
        else {
            return Response::json(['error'=>true]);
        }
    }
}
