<?php

namespace App\Http\Controllers\Home;

use App\Post;
use App\Gallery;
use App\Setting;
use App\Carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;

class HomeController extends BaseController
{
    public function index(){

        return view('Home.home',[
            'carousel'=>Carousel::all(),
            'post'=>Post::all(),
            'gallery'=>Gallery::paginate(12),
        ]);
    }


    public function contact(){
        return view('home.contact.index',[
            'gallery'=>Gallery::paginate(12),
        ]);
    }

    public function about(){
        return view('home.about.index',[
            'gallery'=>Gallery::paginate(12),
        ]);
    }
}
