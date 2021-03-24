<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=['judul','isi','picture','user_id','post_categories_id'];
}
