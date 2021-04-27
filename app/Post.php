<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='post';

    protected $fillable=['judul','isi','picture','user_id','post_category_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function category(){
        return $this->belongsToMany('App\PostCategory','post_postcategory','post_id','postcategory_id');
    }
}
