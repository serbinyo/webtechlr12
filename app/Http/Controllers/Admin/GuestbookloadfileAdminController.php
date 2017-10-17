<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class GuestbookloadfileAdminController extends AdminController{
	public function guestbookloadfile(){
		return view('admin.guestbookloadfile')->with(['admin'=>$this->admin, 'adminsPassFile'=>$this->adminsPassFile, 'message'=>'']);
	}
	
	public function load(){
                    $source = $_FILES["messages"]["tmp_name"];
                    $dest = $_FILES["messages"]["name"];
                    if (is_file($source)) {
                        if ($_FILES["messages"]["name"] === 'messages.inc') {
                            if (copy($source, $dest)) {
                                $message = '<h3 style="text-align: center; color: blue;">Файл успешно загружен</h3>';                               
                            } else {
                                $message = '<h3 style="text-align: center; color: red;">Ошибка загрузки файла</h3>';
                            }
                        } else {
                            $message = '<h3 style="text-align: center; color: red;">Ошибка. Требуется messages.inc</h3>';
                        }
                    } else {
                        $message = '<h3 style="text-align: center; color: red;">Ошибка чтения файла</h3>';
                    }
                    return view('admin.guestbookloadfile')->with(['admin'=>$this->admin, 'adminsPassFile'=>$this->adminsPassFile, 'message'=>$message]);
	}
}
