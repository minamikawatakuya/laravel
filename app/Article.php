<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    
    protected $table = 'article';

    public function writer()
    {
        return $this->belongsTo('App\Writer');
    }
    
    public function get_all(){

        $data = $this->orderBy('id', 'desc')->paginate(15);

        return $data;

    }

    public function get_by_id($id){

        $data = $this->where('id',$id)->first();

        return $data;

    }

    public function get_by_writer_id($writer_id){

        $data = $this->where('writer_id',$writer_id)
        ->orderBy('id', 'desc')
        ->paginate(15);

        return $data;

    }

}
