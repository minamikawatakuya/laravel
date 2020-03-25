<?php

namespace App\Http\Controllers\Vue;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index(){
        return view('vue.index');
    }
    
    public function detail(Request $request){

        $article_id = $request->id;

        $param = [
            'article_id' => $article_id
        ];

        return view('vue.detail', $param);

    }

}
