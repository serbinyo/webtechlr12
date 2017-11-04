<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Validator;
use Response;

class comment extends Model
{
    public $timestamps = false;
    protected $fillable = ['blogid','author','body','date'];

    public function getAllComments()
    {
        $comments = DB::table('Comments')->orderBy('date', 'desc')->get();
        return $comments;
    }

    public function storeAndShow($data)
    {
        $validator = Validator::make($data,
            [
                'body'=>'required'
            ]);

        if ($validator->fails()) {
            return Response::json(['error'=>$validator->errors()->all()]);
        }
        $data['date'] = date("Y-m-d H:i:s");
        $this->fill($data);
        $this->save();

        $view_comment = view('one_comment')->with('comment', $this)->render();
        return $view_comment;
    }
}
