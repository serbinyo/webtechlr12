<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Blogarticle;

class BlogloadfileAdminController extends AdminController
{
    public function blogloadfile()
	{
		return view('admin.blogloadfile')->with(['admin'=>$this->admin, 'adminsPassFile'=>$this->adminsPassFile,'message'=>'']);
	}
	
	public function load(){

		$source = $_FILES["messages"]["tmp_name"];
		$file_type = $_FILES["messages"]["type"];
		if($file_type === 'application/vnd.ms-excel'){
			foreach(file($source) as $v){
				$rows[] = explode(',', $v);
			}
			if(isset($rows)){
				foreach($rows as $row){
            		$this->insertFromFile($row);
				}
				return view('admin.blogloadfile')->with(['admin'=>$this->admin, 'adminsPassFile'=>$this->adminsPassFile,'message'=>'Добавленно']);
			} else{
				return view('admin.blogloadfile')->with(['admin'=>$this->admin, 'adminsPassFile'=>$this->adminsPassFile,'message'=>'Файл пуст']);
			}
		} else{
			return view('admin.blogloadfile')->with(['admin'=>$this->admin, 'adminsPassFile'=>$this->adminsPassFile,'message'=>'Поддерживаемый формат: CSV. Проверьте и повторите']);
		}
	}
	
	public function insertFromFile($row){
		$title = trim($row['0'], '"');
		$image = trim($row['2'], '"');
		$body = trim($row['1'], '"');
		$date = trim($row['3'], '"');
		
		$data = [
			'title'=>$title,
			'image'=>$image, 
			'body'=>$body, 
			'date'=>$date
		];
		
		$article = new Blogarticle($data);
		$article->save();
	}
}
