<?php

namespace App\Http\Controllers\Home;

use App\Gallery;
use App\GalleryCategory;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;

class GalleryController extends BaseController
{
    public function index(){
        return view('home.gallery.index',[
            'gallery'=>Gallery::paginate(20),
            'gallery_category'=>GalleryCategory::all(),
        ]);
    }
}
