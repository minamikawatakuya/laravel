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

        header("Access-Control-Allow-Origin: *");
        return $article;
    }

    public function writers(Writer $writer){

        $writers = $writer->get_all_3();

        header("Access-Control-Allow-Origin: *");
        return $writers;

    }

    public function articles(Request $request,Article $article){

        //$articles = $article->get_for_api();
        $articles = $article->get_all();

        header("Access-Control-Allow-Origin: *");
        return $articles;

    }

    public function login(Request $request,Writer $writer){

        $email = $request->email;
        $password = $request->password;

        //$email = "hoge@gmail.com";
        //$password = "hogepass";

        $data = $writer->get_writer_data_by_email($email);

        //echo "<pre>";print_r($data);echo "</pre>";exit();

        if( isset( $data->password ) ){
            $result = password_verify($password, $data->password);
            if( $result === true ){
                //echo "hoge1";exit();
                header("Access-Control-Allow-Origin: *");
                return $data;
            }else{
                //echo "hoge2";exit();
                //パスワードの不一致
                return false;
            }
        }else{
            //echo "hoge3";exit();
            //emailの不一致
            return false;
        }

    }

}
