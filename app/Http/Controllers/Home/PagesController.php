<?php

namespace App\Http\Controllers\Home;

use App\Page;
use App\Gallery;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use function GuzzleHttp\Promise\all;

class PagesController extends Controller
{
    public function index($nama){
        return view('home.pages.index',[
            'page'=>Page::where('nama',$nama)->first(), 
            'gallery'=>Gallery::paginate(12),
            'instagram'=>Setting::where('nama','instagram')->first(),
            'facebook'=>Setting::where('nama','facebook')->first(),
            'alamat'=>Setting::where('nama','alamat')->first(),
            'phone'=>Setting::where('nama','phone')->first(),
            'email'=>Setting::where('nama','email')->first(),
            'pages'=>Page::all()
        ]);
    }
}
