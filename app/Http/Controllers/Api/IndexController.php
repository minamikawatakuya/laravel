<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Writer;
use App\Article;

class IndexController extends Controller
{
    public function index(Request $request,Writer $writer,Article $article){

        if( isset($request->id) ){
            $writer_id = $request->id;
            $articles = $article->get_by_writer_id($writer_id);
            $writer_name = $writer->get_writer_name_by_writer_id($writer_id);
        }else{
            $writer_id = "";
            $articles = $article->get_all();
            $writer_name = null;
        }

        $writers = $writer->get_all_3();
        //$writers = null;

        if( isset($request->update_article_num ) ){
            //記事数更新(処理が重いのでコメントアウト)
            //$writer->update_article_num();
        }

        $param = [
            'writers' => $writers,
            'articles' => $articles,
            'writer_name' => $writer_name,
            'writer_id' => $writer_id
        ];
        return view('index', $param);

    }

    public function detail(Request $request,Article $article){

        $article_id = $request->id;

        $article = $article->get_by_id($article_id);

        $param = [
            'article' => $article
        ];

        return $article;
    }

    public function writers(Writer $writer){

        $writers = $writer->get_all_3();

        return $writers;

    }

    public function articles(Request $request,Article $article){

        //$articles = $article->get_for_api();
        $articles = $article->get_all();

        return $articles;

    }

}
