<?php

namespace App\Http\Controllers\Home;

use App\Page;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    public function __construct()
    {
        $alamat=Setting::where('nama','alamat')->first();
        $instagram=Setting::where('nama','instagram')->first();
        $facebook=Setting::where('nama','facebook')->first();
        $phone=Setting::where('nama','phone')->first();
        $email=Setting::where('nama','email')->first();
        $blog_pic=Setting::where('nama','blog_pic')->first();
        $gallery_pic=Setting::where('nama','gallery_pic')->first();
        $about_pic=Setting::where('nama','about_pic')->first();
        $about=Setting::where('nama','about')->first();
        $quote_bg=Setting::where('nama','quote_bg')->first();
        $quote=Setting::where('nama','quote')->first();
        $quote_author=Setting::where('nama','quote_author')->first();
        $pages=Page::all();
        
        view()->share(compact('alamat','instagram','facebook','phone','email','pages','blog_pic','gallery_pic','about_pic','about','quote_bg','quote','quote_author'));
    }
}
