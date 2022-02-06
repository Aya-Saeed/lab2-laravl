<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;

class ArticleController extends Controller
{
    //
    public function list()
    {
        $articles=article::all();
        return view('article.article',['art'=>$articles]);
    }
    public function create()
    {
        return view('article.create');
    }
    public function save(Request $request)
    {
        $article = new article;
        $article -> name = $request -> name;
        $article -> slug = $request -> slug;
        $article -> description = $request -> description;
        $article -> is_used = $request -> is_used;
        $article ->cat_id=$request->cat_id;
        
        $article->save(); // INSERT INTO TABLE 

        return redirect()->route('articles.list');
        // save new article
    }
    public function update($id)
    {
        $data=article::find($id);
        return view('article.edit',['data'=>$data]);
    }

    public function updateddata(Request $request)
    {
        $article = article::find($request->id);
        $article -> name = $request -> name;
        $article -> slug = $request -> slug;
        $article -> description = $request -> description;
        $article -> is_used = $request -> is_used;
        $article->save();

        return redirect()->route('articles.list');
      
    }
    public function delete($id)
    {
        // $article = article::where('id','=', $id)->get(); 
        $article = article::find($id);
        // $cateogry = article::whereId($id)->get();
        //$article = article::findOrFail($id);

        if($article)
        {
            $article -> delete();
        }

        return redirect()->route('articles.list');

    }
    public function show($id)
    {
        $articles=article::all();
        return view("article.articledetails",["art"=>$articles[$id-1]]);
    }
}
