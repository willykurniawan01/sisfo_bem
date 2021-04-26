<?php

namespace App\Http\Controllers\Home;

use App\Post;
use App\Gallery;
use App\Setting;
use App\Carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;

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
            'about'=>Setting::where('nama','about')->first(),
            'about_pic'=>Setting::where('nama','about_pic')->first(),
            'quote'=>Setting::where('nama','quote')->first(),
            'quote_author'=>Setting::where('nama','quote_author')->first(),
            'quote_bg'=>Setting::where('nama','quote_bg')->first(),
            'pages'=>Page::all()
        ]);
    }


    public function contact(){
        return view('home.contact.index',[
            'gallery'=>Gallery::paginate(12),
            'quote_bg'=>Setting::where('nama','quote_bg')->first(),
            'instagram'=>Setting::where('nama','instagram')->first(),
            'facebook'=>Setting::where('nama','facebook')->first(),
            'alamat'=>Setting::where('nama','alamat')->first(),
            'phone'=>Setting::where('nama','phone')->first(),
            'email'=>Setting::where('nama','email')->first(),
            'latitude'=>Setting::where('nama','latitude')->first(),
            'longitude'=>Setting::where('nama','longitude')->first(),
            'pages'=>Page::all(),
        ]);
    }

    public function about(){
        return view('home.about.index',[
            'gallery'=>Gallery::paginate(12),
            'quote_bg'=>Setting::where('nama','quote_bg')->first(),
            'about'=>Setting::where('nama','about')->first(),
            'instagram'=>Setting::where('nama','instagram')->first(),
            'facebook'=>Setting::where('nama','facebook')->first(),
            'alamat'=>Setting::where('nama','alamat')->first(),
            'phone'=>Setting::where('nama','phone')->first(),
            'email'=>Setting::where('nama','email')->first(),
            'latitude'=>Setting::where('nama','latitude')->first(),
            'longitude'=>Setting::where('nama','longitude')->first(),
            'pages'=>Page::all(),
            'about_pic'=>Setting::where('nama','about_pic')->first(),
        ]);
    }
}
