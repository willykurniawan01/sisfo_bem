<?php

namespace App\Http\Controllers\Home;

use App\Post;
use App\Gallery;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\PostCategory;

class BlogController extends Controller
{
    public function index(){

        return view('home.blog.index',[
            'post'=>Post::with('user')->get(),
            'category'=>PostCategory::all(),
            'parallax_pic'=>Setting::where('nama','parallax_pic')->first(),
            'gallery'=>Gallery::paginate(12),
            'instagram'=>Setting::where('nama','instagram')->first(),
            'facebook'=>Setting::where('nama','facebook')->first(),
            'alamat'=>Setting::where('nama','alamat')->first(),
            'phone'=>Setting::where('nama','phone')->first(),
            'email'=>Setting::where('nama','email')->first(),
        ]);
    }

    public function category(PostCategory $category){
        return view('home.blog.index',[
            'post'=>$category->posts,
            'category'=>PostCategory::all(),
            'parallax_pic'=>Setting::where('nama','parallax_pic')->first(),
            'gallery'=>Gallery::paginate(12),
            'instagram'=>Setting::where('nama','instagram')->first(),
            'facebook'=>Setting::where('nama','facebook')->first(),
            'alamat'=>Setting::where('nama','alamat')->first(),
            'phone'=>Setting::where('nama','phone')->first(),
            'email'=>Setting::where('nama','email')->first(),
        ]);
    }

    public function detail(Post $post){
     
        return view('home.blog.detail',[
            'post'=>$post,
            'category'=>PostCategory::all(),
            'gallery'=>Gallery::paginate(12),
            'instagram'=>Setting::where('nama','instagram')->first(),
            'facebook'=>Setting::where('nama','facebook')->first(),
            'alamat'=>Setting::where('nama','alamat')->first(),
            'phone'=>Setting::where('nama','phone')->first(),
            'email'=>Setting::where('nama','email')->first(),
            'parallax_pic'=>Setting::where('nama','parallax_pic')->first(),
        ]);
    }
}
