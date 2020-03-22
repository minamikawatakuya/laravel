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

        $articles = $article->get_by_writer_id_delete($writer_id);

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

}
