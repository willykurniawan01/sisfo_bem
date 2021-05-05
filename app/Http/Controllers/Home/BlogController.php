<?php

namespace App\Http\Controllers\Home;

use App\Page;
use App\Post;
use App\Gallery;
use App\Setting;
use App\PostCategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends BaseController
{
    public function index(){

        $post=Post::with('user')->latest()->paginate(10);
        $category=PostCategory::all();
        $gallery=Gallery::paginate(12);       

        return view('home.blog.index',compact('post','category','gallery',));

    }

    public function category($id){
        $post_category=PostCategory::findOrFail($id);
        $post=$post_category->post()->latest()->paginate(10);
        $category=PostCategory::all();
        $gallery=Gallery::paginate(12);
      

        return view('home.blog.index',compact('post','category','gallery'));
    }

    public function detail(Post $post){

        $category=PostCategory::all();
        $gallery=Gallery::paginate(12);

        return view('home.blog.detail',compact('post','category','gallery'));
     
    }
}
