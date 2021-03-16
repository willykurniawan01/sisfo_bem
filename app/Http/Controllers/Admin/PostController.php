<?php

namespace App\Http\Controllers\Admin;

use App\Post;
use Illuminate\Http\Request;
use function PHPSTORM_META\map;

use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.post.index',[
            'post'=>Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required|string',
            'isi'=>'required',
            'user_id'=>'required|numeric',
            'picture'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'post_categories_id'=>'numeric',
        ]);

        $imageName = time().'.'.$request->picture->extension();  
        $request->picture->move(public_path('images'), $imageName);

        Post::create([
            'judul'=>$request->judul,
            'isi'=>$request->isi,
            'user_id'=>Auth::user()->id,
            'picture'=>URL::to('images').'/'.$imageName,
            'post_categories_id'=>$request->post_categories_id
        ]);

        return redirect()->route('post.index')->with('success','Berhasil Menambahkan Post!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.post.edit',[
            'post'=>Post::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post=Post::findOrFail($id);
        $picture=explode('/',$post->picture);

        //cek ada gambar atau tidak
        if($request->hasFile('picture')){
            if(File::exists('images/'.$picture[4])){
                File::delete('images/'.$picture[4]);
            }
            $imageName = time().'.'.$request->picture->extension();  
            $request->picture->move(public_path('images'), $imageName);

            $post->update([
                'judul'=>$request->judul,
                'isi'=>$request->isi,
                'user_id'=>Auth::user()->id,
                'picture'=>URL::to('images').'/'.$imageName,
                'post_categories_id'=>$request->post_categories_id
            ]);
        }else{
            $post->update($request->except('_token'));
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::findOrFail($id);
        $picture=explode('/',$post->picture);
      
        if(File::exists('images/'.$picture[4])){ 
        File::delete('images/'.$picture[4]);
        Post::destroy($id);
        }
        
        return redirect()->route('post.index')->with('success','Berhasil Menghapus Post!');
    }
}
