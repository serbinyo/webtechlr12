<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Response;
use	App\Blogarticle;

class BlogeditorAdminController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Blogarticle $articleModel)
    {
        $articles = $articleModel->getAllArticles();
        return view('admin.blogeditor')->with(['admin'=>$this->admin, 'adminsPassFile'=>$this->adminsPassFile, 'articles'=>$articles]);
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
     * @param  \App\Blogarticle $blogarticleModel
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Blogarticle $blogarticleModel)
    {
        $data = $request->except('_token');
        if(array_key_exists('article_id' ,$data))
        {
            $response = $blogarticleModel->updateArticle($data['article_id'], $data);
            return Response::json($response);
        } else
        {
            $response = $blogarticleModel->saveArticle($data);
            if(is_array($response))
            {
                if (array_key_exists('error',$response))
                {
                    return Response::json(['error'=>$response['error']]);
                }
            } else
            {
                $newArticle = $blogarticleModel->saveArticle($data);
                $view_article = view('one_article')->with('article', $newArticle)->render();
                return Response::json(['success'=>true, 'article'=>$view_article]);
            }
        }
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
     * @param  \App\Blogarticle $blogarticleModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Blogarticle $blogarticleModel)
    {
        $blogarticleModel->kill($id);
    	return redirect('admin_blogeditor');
    }
}
