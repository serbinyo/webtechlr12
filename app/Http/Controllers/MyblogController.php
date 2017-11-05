<?php

namespace App\Http\Controllers;

use App\Comment,
    App\Blogarticle;

class MyblogController extends Controller
{
    public function myblog(Comment $commentModel, Blogarticle $articleModel)
    {
		$articles = $articleModel->getAllArticles();
		$comments = $commentModel->getAllComments();

		return view('myblog')->with(['user'=> $this->user,'articles'=>$articles, 'comments'=>$comments]);
	}
}
