<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    
    protected $table = 'article';

    public $timestamps = false;

    public static $rules = array(
        'title' => 'required|max:100',
        'content' => 'required',
    );

    /**
     * create()やupdate()で入力を受け付ける ホワイトリスト
     */
    protected $fillable = ['updated', 'writer_id', 'title', 'content'];

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

    public function get_by_writer_id_delete($writer_id){

        $data = $this->where('writer_id',$writer_id)->where('delete_flag','1')
        ->orderBy('id', 'desc')
        ->paginate(15);

        return $data;

    }

}
