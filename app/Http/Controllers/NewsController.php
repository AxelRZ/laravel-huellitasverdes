<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class NewsController extends Controller
{


    public function index(){
        return Article::all();
    }

    public function query($id){
        return Article::find($id);
    }
    public function queryrange($start,$end){

        return Article::where('id','>=',$start)->where('id','<',$end)->get();


    }

    public function create(Request $request)
    {
        return Article::create($request->all());
    }

    public function updateId(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function update(Request $request){
        $article = Article::findOrFail($request->input('id'));

        $article->attributes['title'] = $request->input('title');
        $article->attributes['body_raw'] = $request->input('body_raw');
        $article->attributes['bgcolor'] = $request->input('bgcolor');
        $article->attributes['fgcolor'] = $request->input('fgcolor');
        $article->attributes['subtitle'] = $request->input('subtitle');
        $article->attributes['relevance'] = $request->input('relevance');


    }

    

    public function delete(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return 204;
    }
    

    public function composeView($page, Request $request){
        $num = count($this->index());

        $queue = 10;
        $end = $num + 1 - ($page * $queue);
        $start = $end - $queue;

        if($page<0){
            return redirect('/news/'.(string)floor($num/$queue));
        }
       
        $articles = $this->queryrange($start,$end);
        if (sizeof($articles) == 0) {
            return redirect('/news/0');
        }

        return view('news',[
            'cards' => $articles,
            'page' => $page

        ]);
        
    }

    public function composeArticle($id){
        $article = $this->query($id);

        if ($article != null){
            return view('article',['article'=>$article]);

        }
        $last = count($this->index());
        return redirect('/news/article/'.(string)$last)->with('status','Como no se encontro el articulo, ¡Te regresamos al último!.');
        
    }

    public function adminView(){
        return view('admin', ['articles'=>$this->index()]);
    }


    public function editNewsView($id){
        return view('editArticle');
    }

   
}
