<?php

namespace App\Http\Controllers\Home;

use App\Gallery;
use App\GalleryCategory;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;

class GalleryController extends Controller
{
    public function index(){
        return view('home.gallery.index',[
            'gallery'=>Gallery::paginate(20),
            'gallery_category'=>GalleryCategory::all(),
            'gallery_pic'=>Setting::where('nama','gallery_pic')->first(),
            'story'=>Setting::where('nama','story')->first(),
            'instagram'=>Setting::where('nama','instagram')->first(),
            'facebook'=>Setting::where('nama','facebook')->first(),
            'alamat'=>Setting::where('nama','alamat')->first(),
            'phone'=>Setting::where('nama','phone')->first(),
            'email'=>Setting::where('nama','email')->first(),
            'latitude'=>Setting::where('nama','latitude')->first(),
            'longitude'=>Setting::where('nama','longitude')->first(),
            'pages'=>Page::all()
        ]);
    }
}
