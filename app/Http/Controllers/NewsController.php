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

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return 204;
    }
    
    public function composeView($page){

        $queue = 10;
        $start = $page * $queue;
        $end = $start + $queue;
       
        $articles = $this->queryrange($start,$end);
        if (sizeof($articles) == 0) {
            return redirect('/news/'.(string)(floor(count($this->index())/$queue)));
            # code...
        }

        return view('news',[
            'cards' => $articles,
            'page' => $page

        ]);
        



    }

    

    




    
   
}
