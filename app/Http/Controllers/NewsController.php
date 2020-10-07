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

    public function updateArticle(Request $request)
    {
        $id = $request->session()->get('id');
        $request->session()->forget('id');

        $article = Article::findOrFail($id);
        $article->fill($request->all())->save();
        return redirect('/admin')->with('status', 'Se actualizo con exito');
    }

    public function update(Request $request){
        $article = Article::findOrFail($request->input('id'));

        $article->attributes['title'] = $request->input('title');
        $article->attributes['body_raw'] = $request->input('body_raw');
        $article->attributes['bgcolor'] = $request->input('bgcolor');
        $article->attributes['fgcolor'] = $request->input('fgcolor');
        $article->attributes['subtitle'] = $request->input('subtitle');
        $article->attributes['relevant'] = $request->input('relevant');

        return redirect('/admin/preview/{id}'.$request->input('id'));
    }

    public function redirectPreview(Request $request){
        return view('preview', $request->all());
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


    public function editNewsView($id ,Request $req){

        $req->session()->put("id",$id);
        
        return view('editArticle',['article'=>$this->query($id)]);
    }

    public function showPreview(Request $req){
        $id = $req->session()->get('id');
        $_s_article = $this->query($id)->replicate();
        $_s_article->fill($req->all());
        


        return view('preview',["article" => $_s_article]);

    }

    

    public function composePreview(Request $req){

        $article = $req->input('article');

        if($article == null){
            return abort(404);
        }
        return view('preview',['article'=>$article]);

    }



   
}
