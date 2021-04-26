<?php

namespace App\Http\Controllers\Home;

use App\Page;
use App\Post;
use App\Gallery;
use App\Setting;
use App\PostCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index(){

        return view('home.blog.index',[
            'post'=>Post::with('user')->paginate(10),
            'category'=>PostCategory::all(),
            'blog_pic'=>Setting::where('nama','blog_pic')->first(),
            'gallery'=>Gallery::paginate(12),
            'instagram'=>Setting::where('nama','instagram')->first(),
            'facebook'=>Setting::where('nama','facebook')->first(),
            'alamat'=>Setting::where('nama','alamat')->first(),
            'phone'=>Setting::where('nama','phone')->first(),
            'email'=>Setting::where('nama','email')->first(),
            'pages'=>Page::all()
        ]);
    }

    public function category(PostCategory $category){
        return view('home.blog.index',[
            'post'=>$category->posts,
            'category'=>PostCategory::all(),
            'parallax'=>Setting::where('nama','parallax')->first(),
            'gallery'=>Gallery::paginate(12),
            'instagram'=>Setting::where('nama','instagram')->first(),
            'facebook'=>Setting::where('nama','facebook')->first(),
            'alamat'=>Setting::where('nama','alamat')->first(),
            'phone'=>Setting::where('nama','phone')->first(),
            'email'=>Setting::where('nama','email')->first(),
            'pages'=>Page::all()
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
            'parallax'=>Setting::where('nama','parallax')->first(),
            'pages'=>Page::all()
        ]);
    }
}
