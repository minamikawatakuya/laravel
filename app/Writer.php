<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Writer extends Model
{
    
    protected $table = 'writer';

    //public $timestamps = false;

    public function articles()
    {
        return $this->hasMany('App\Article');
    }
    
    public function get_all(){

        $data = $this->all();

        return $data;

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
        /*
        if( $this->nickname != "" ){
            $disp_name = $this->nickname;
        }else{
            $disp_name = $this->account;
        }
        */
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
