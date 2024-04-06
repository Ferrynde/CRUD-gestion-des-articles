<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(){
        $articles=Article::all();
        return view('welcome',compact('articles'));
    }
    public function create(Request $request){
        $request->validate([
            'libelle'=>'required',
            'prix'=>'required',
        ]);
        $article=new Article();
        $article->libelle=$request->libelle;
        $article->prix=$request->prix;
        
        $article->save();
        return redirect('/');
    }
}
