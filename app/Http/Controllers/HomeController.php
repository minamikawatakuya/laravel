<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Article;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Article $article)
    {
        
        $writer_id = Auth::user()->id;

        $articles = $article->get_by_writer_id($writer_id);

        $param = [
            'articles' => $articles
        ];
        return view('home', $param);
        
    }

    public function detail(Request $request,Article $article)
    {
        
        $article_id = $request->id;

        $article = $article->get_by_id($article_id);

        $param = [
            'article' => $article
        ];

        return view('home.detail', $param);
        
    }

    public function add(Request $request,Article $article)
    {
        return view('home.add');   
    }

    public function create(Request $request,Article $article)
    {
        
        $this->validate($request, Article::$rules);
        $form = $request->all();
        unset($form['_token']);
        $article->fill($form)->save();
        return redirect('/home'); 
    }

    public function edit(Request $request)
    {
        $article = Article::find($request->id);
        return view('home.edit', ['form' => $article]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Article::$rules);
        $article = Article::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $article->fill($form)->save();
        return redirect('/home');
    }

}
