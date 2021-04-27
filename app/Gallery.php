<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table='galleries';

    protected $fillable=['picture','gallery_categories_id'];

    public function gallery_category(){
        return $this->belongsTo('App\GalleryCategory');
    }
}
