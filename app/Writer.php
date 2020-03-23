<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Article;

class Writer extends Model
{
    
    protected $table = 'writer';

    //public $timestamps = false;

    public function articles()
    {
        return $this->hasMany('App\Article');
    }
    
    public function get_all(){

        $items = $this->where('article_num','>','0')->orderBy('article_num', 'desc')->get();

        return $items;

    }

    public function update_article_num($writers){

        $article = new Article;

        foreach($writers as $writer){
            $num = $article->get_article_num_by_writer_id($writer->id);
            $tmp = $this->find($writer->id);
            $tmp->article_num = $num;
            $tmp->save();
        }

        return true;

    }

    public function get_all_2(){

        $items = $this::withCount('articles')
        ->where('nickname','<>','')
        ->where('account','<>','')
        ->orderBy('articles_count', 'desc')
        ->limit(20)
        ->get();

        /*
        $filtered = $items->filter(function ($item) {
            return $item['articles_count'] > 100;
        });
        */

        //return $filtered;
        return $items;

    }

    public function get_by_id($id){

        $data = $this->where('id',$id)->first();

        return $data;

    }

    public function disp_name(){
        $disp_name = $this->get_disp_name($this->account,$this->nickname);
        return $disp_name;
    }

    public function get_writer_name_by_writer_id($writer_id){
        $data = $this->where('id',$writer_id)->first();
        $disp_name = $this->get_disp_name($data->account,$data->nickname);
        return $disp_name;
    }

    private function get_disp_name($account,$nickname){
        if( $nickname != "" ){
            $disp_name = $nickname;
        }else{
            $disp_name = $account;
        }
        return $disp_name;
    }

}
