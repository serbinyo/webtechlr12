<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Validator;

class blogarticle extends Model
{
	public $timestamps = false;
    protected $fillable = ['date','title','image','body'];

    public function getAllArticles()
    {
        $articles = DB::table('Blogarticles')->orderBy('date', 'desc')->paginate(5);
        return $articles;
    }

    public function loadFromFile()
    {
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
                return $msg = 'Добавленно';
            } else{
                return $msg = 'Файл пуст';
            }
        } else{
            return $msg = 'Поддерживаемый формат: CSV. Проверьте и повторите';
        }
    }

    public function insertFromFile($row)
    {
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
        $this->fill($data);
        $this->save();
    }

    public function updateArticle($id, $data){
        if ($err = $this->validateNewArticle($data))
        {
            return $err;
        }
        if (empty($data['image']))
        {
            $data['image'] = '../../public/img/noimage.jpg';
        }
        $article = self::find($id);
        $article->title = $data['title'];
        $article->image = $data['image'];
        $article->body = $data['body'];
        $article->save();
        $data['body']=nl2br($data['body']);
        return ['success'=>true,'article'=>$data];
    }

    public function saveArticle($data){
        if ($err = $this->validateNewArticle($data))
        {
            return $err;
        }
        if (empty($data['image']))
        {
            $data['image'] = '../../public/img/noimage.jpg';
        }
        $data['date'] = date("Y-m-d H:i:s");
        $this->fill($data);
        $this->save();
        return $this;
    }

    public function validateNewArticle($data){
        $validator = Validator::make($data,
            [
                'title'=>'required',
                'body'=>'required'
            ]);
        if ($validator->fails())
        {
            return ['error'=>$validator->errors()->all()];
        }
    }

    public function kill($id)
    {
        $article = self::find($id);
        $article->delete();
    }
}
