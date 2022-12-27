<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class articleController extends Controller
{
    ///**
  //   * Display a listing of the resource.
     //*
     //* @return \Illuminate\Http\Response
     //*/
    public function index()
    {
        $articles = Article::all();
        return view('article.index',[
            'articles' => $articles
        ]);
        //return $articles;
    }

 //   /**
   //  * Show the form for creating a new resource.
   //  *
 //    * @return \Illuminate\Http\Response
    // */
    public function create()
    {
        return view('article.create');
    }

  //  /**
  //   * Store a newly created resource in storage.
   //  *
   //  * @param  \Illuminate\Http\Request  $request
   //  * @return \Illuminate\Http\Response
   //  */
    public function store(Request $request)
    {
        $newArticle = Article::create([
            'title' => $request->title,
            'body' => $request->body,
            'price' => $request->price,
            'user_id' => 1
        ]);
        return redirect('article/'.$newArticle->id);
    }

   // /**
  //   * Display the specified resource.
  //   *
  //   * @param  \App\Models\Article  $article
   //  * @return \Illuminate\Http\Response
   //  */
    public function show(Article $article_id)
    {
        return view('article.show',[
            'article_id'=> $article_id
        ]);
        //return $article_id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
