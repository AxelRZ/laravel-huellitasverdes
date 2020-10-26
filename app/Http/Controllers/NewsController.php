<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



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
    public function createArticle(Request $request)
    {
        $art = $this->create($request);
        $art->last_editor = Auth::user()->name;
        $art->save();
        return redirect('/admin')->with('status', 'Se creo con exito');
    }

    public function updateArticle(Request $request)
    {
        $id = $request->session()->get('id');
        $request->session()->forget('id');

        $article = Article::findOrFail($id);

        $article->last_editor = Auth::user()->name;
        
    
        $article->fill($request->all())->save();

        return redirect('/admin')->with('status', 'Se actualizo con exito');
    }

    public function showCreate(){
        return view('createArticle');
    }


    public function redirectPreview(Request $request){
        return view('preview', $request->all());
    }

    public function delete($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return 1;

    }
    public function deleteArticle(Request $req){
        $id = $req->session()->get('id');
        $this->delete($id);

        return redirect('/admin')->with('status', 'Se elimino con exito. id: '.$id);

    }
    

    public function composeNewsPage($page, Request $req){
        $QUEUE = 10;
        $articles = DB::table('news')
        ->orderBy('id','desc')
        ->skip($page*$QUEUE)
        ->take(10)
        ->get();

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

    public function adminView(Request $req){

        $req->session()->forget('id');
        
        return view('admin', ['articles'=>$this->index()]);
    }

    public function editNewsView($id ,Request $req){

        $req->session()->put("id",$id);
        
        return view('editArticle',['article'=>$this->query($id)]);
    }

    public function showPreview(Request $req){
        if ($req->session()->has('id')){
            $id = $req->session()->get('id');
            $_s_article = $this->query($id)->replicate();
            $_s_article->fill($req->all());
            return view('preview',["article" => $_s_article]);
        }

        $art = new Article;
        $art->fill($req->all());

        return view('preview',["article"=> $art]);

    }

    public function composePreview(Request $req){

        $article = $req->input('article');

        if($article == null){
            return abort(404);
        }
        return view('preview',['article'=>$article]);
    }
   
}
