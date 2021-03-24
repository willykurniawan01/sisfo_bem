<?php

namespace App\Http\Controllers\Home;

use App\Post;
use App\Gallery;
use App\Setting;
use App\Carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){

        return view('Home.home',[
            'carousel'=>Carousel::all(),
            'post'=>Post::all(),
            'gallery'=>Gallery::paginate(12),
            'instagram'=>Setting::where('nama','instagram')->first(),
            'facebook'=>Setting::where('nama','facebook')->first(),
            'alamat'=>Setting::where('nama','alamat')->first(),
            'phone'=>Setting::where('nama','phone')->first(),
            'email'=>Setting::where('nama','email')->first(),
            'story'=>Setting::where('nama','story')->first(),
            'story_pic'=>Setting::where('nama','story_pic')->first(),
            'parallax_text'=>Setting::where('nama','parallax_text')->first(),
            'parallax_pic'=>Setting::where('nama','parallax_pic')->first(),
        ]);
    }
}
