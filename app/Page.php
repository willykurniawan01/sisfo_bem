<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $table='page';
    protected $fillable=['nama','judul','picture','content','url'];
}
