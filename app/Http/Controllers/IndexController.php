<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Writer;
use App\Article;

class IndexController extends Controller
{
    public function index(Request $request,Writer $writer,Article $article){

        if( isset($request->id) ){
            //echo "id";exit();

            $writer_id = $request->id;

            $articles = $article->get_by_writer_id($writer_id);

            $writer_name = $writer->get_writer_name_by_writer_id($writer_id);

        }else{

            $writer_id = "";
            $articles = $article->get_all();
            $writer_name = null;

        }

        $writers = $writer->get_all();
        //$writers = null;

        /*
        foreach($items as $item){
            echo "<pre>";
            print_r( count($item->articles) );
            echo "</pre>";
            exit();
        }
        */
        
        /*
        echo "<pre>";
        print_r($items);
        echo "</pre>";
        exit();
        */

        $param = [
            'writers' => $writers,
            'articles' => $articles,
            'writer_name' => $writer_name,
            'writer_id' => $writer_id
        ];
        return view('index', $param);

        //return view('index');
    }

    public function detail(Request $request,Article $article){

        $article_id = $request->id;

        $article = $article->get_by_id($article_id);

        $param = [
            'article' => $article
        ];

        return view('detail', $param);
    }

    public function vue(){
        return view('vue');
    }

    public function json($id = -1){
        $dummy=[
            [
                "id"=>"1",
                "name"=>"山田太郎",
                "email"=>"hoge1@gmail.com"
            ],
            [
                "id"=>"2",
                "name"=>"鈴木花子",
                "email"=>"hoge2@gmail.com"
            ],
        ];
        return $dummy;
        /*
        if ($id == -1)
        {
            return User::get()->toJson();
        }
        else
        {
            return User::find($id)->toJson();
        }
        */
    }

}
