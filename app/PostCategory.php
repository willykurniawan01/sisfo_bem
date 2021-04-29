<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{

   protected $table='postcategory';
   protected $fillable=['nama'];


   public function post(){
      return $this->belongsToMany('App\Post','post_postcategory','postcategory_id','post_id');
   }
}
