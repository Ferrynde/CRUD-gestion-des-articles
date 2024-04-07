<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('welcome', compact('articles'));
    }

    public function create(Request $request)
    {
        $request->validate([
            'libelle' => 'required',
            'prix' => 'required',
        ]);

        $article = new Article();
        $article->libelle = $request->libelle;
        $article->prix = $request->prix;
        
        $article->save();
        return redirect('/')->with('message', 'Article ajouté avec succès');
    }
    public function update($id){
        $article= Article::find($id);
        return view('update',compact('article'));
    }

    public function update_traitement(Request $request){
        $request->validate([
            'libelle' => 'required',
            'prix' => 'required',
        ]);

        $article = Article::find($request->id);
        $article->libelle = $request->libelle;
        $article->prix = $request->prix;
        
        $article->update();
        return redirect('/')->with('message', 'Article modifie avec succès');
    }
    public function delete($id){
        $article= Article::find($id);
        $article->delete();
        return redirect('/')->with('message','Article supprime');

    }

}