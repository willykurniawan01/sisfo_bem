<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GalleryCategory extends Model
{
    protected $fillable=['nama'];

    function gallery(){
        return $this->hasMany('App\Gallery');
    }
}
