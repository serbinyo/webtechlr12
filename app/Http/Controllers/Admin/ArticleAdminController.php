<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use Validator;

use Response;

use	App\Blogarticle;

class ArticleAdminController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');
        
         $validator = Validator::make($data,
	    	[
	    		'title'=>'required',
				'body'=>'required'
			]);
			
		if ($validator->fails()) {
			return Response::json(['error'=>$validator->errors()->all()]);
		}
		
		if (empty($data['image'])) {
			$data['image'] = '../../public/img/noimage.jpg';
		}
		
		if(array_key_exists('article_id' ,$data)){			
			$this->updateArticle($data['article_id'], $data);
			return Response::json(['success'=>true,'article'=>$data]);
        	
		} else{
			$data = $this->saveArticle($data);
			$view_article = view('one_article')->with('article', $data)->render();
			return Response::json(['success'=>true, 'article'=>$view_article]);		
		}
	exit();
        
    }
    
    
    public function updateArticle($id, $data){
    	
    	$article = Blogarticle::find($id);
		$article->title = $data['title'];
		$article->image = $data['image'];
		$article->body = $data['body'];
		$article->save();
		
	}
	
	public function saveArticle($data){
		
		$data['date'] = date("Y-m-d H:i:s");
		$article = new Blogarticle($data);
		$article->save();
		return $article;
		
	}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Blogarticle::find($id);
        $article->delete();
    	return redirect('admin_blogeditor');
    }
}
