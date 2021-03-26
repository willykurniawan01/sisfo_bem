<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
   protected $fillable=['nama'];

   public function posts(){
      return $this->hasMany('App\Post');
   }
}
