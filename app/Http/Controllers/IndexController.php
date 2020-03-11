<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use App\User;

class IndexController extends Controller
{
    public function index(){
        //echo "TOP(HOGE)!";exit();
        return view('index');
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
