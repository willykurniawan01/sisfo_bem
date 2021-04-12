<?php

namespace App\Http\Controllers\Admin;

use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class SettingController extends Controller
{
   
    public function index()
    {
        return view('admin.setting.index');
    }

    public function socialmedia(){
        return view('admin.setting.socialmedia',[
            'instagram'=>Setting::where('nama','instagram')->first(),
            'facebook'=>Setting::where('nama','facebook')->first()
        ]);
    }

    public function socialmedia_update(Request $request){
      Setting::where('nama','instagram')->update([
          'value'=>$request->instagram
      ]);  

      Setting::where('nama','facebook')->update([
          'value'=>$request->facebook
      ]);  

      Setting::where('nama','twitter')->update([
          'value'=>$request->twitter
      ]);  

     
        
      return redirect()->route('setting.index')->with('success','Pengaturan Berhasil Diterapkan!');
    }

    public function alamat(){
        return view('admin.setting.alamat',[
            'alamat'=>Setting::where('nama','alamat')->first(),
            'phone'=>Setting::where('nama','phone')->first(),
            'email'=>Setting::where('nama','email')->first(),
            'latitude'=>Setting::where('nama','latitude')->first(),
            'longitude'=>Setting::where('nama','longitude')->first(),
        ]);
    }

    public function alamat_update(Request $request){
        Setting::where('nama','alamat')->update([
            'value'=>$request->alamat
        ]);  
  
        Setting::where('nama','phone')->update([
            'value'=>$request->phone
        ]);  

        Setting::where('nama','email')->update([
            'value'=>$request->email
        ]);  

        Setting::where('nama','latitude')->update([
            'value'=>$request->latitude
        ]);  

        Setting::where('nama','longitude')->update([
            'value'=>$request->longitude
        ]);  
          
        return redirect()->route('setting.index')->with('success','Pengaturan Berhasil Diterapkan!');
      }


        public function story(){
        return view('admin.setting.story',[
            'story'=>Setting::where('nama','story')->first(),
            'story_pic'=>Setting::where('nama','story_pic')->first(),
        ]);
    }

      public function parallax(){
        return view('admin.setting.parallax',[
            'parallax_text'=>Setting::where('nama','parallax_text')->first(),
            'parallax'=>Setting::where('nama','parallax')->first(),
        ]);
    }

    
    public function story_update(Request $request){
        $story_pic=Setting::where('nama','story_pic')->first();

        if($request->hasFile('story_pic')){
            if(File::exists('images/'.$story_pic->value)){
                File::delete('images/'.$story_pic->value);
            }
            $imageName = time().'.'.$request->story_pic->extension();  
            $request->story_pic->move(public_path('images'), $imageName);

            Setting::where('nama','story')->update([
                'value'=>$request->story
            ]);  
      
            Setting::where('nama','story_pic')->update([
                'value'=>$imageName
            ]);  

        }

      

        return redirect()->route('setting.index')->with('success','Pengaturan Berhasil Diterapkan!');
      }

    
    public function parallax_update(Request $request){
        $parallax=Setting::where('nama','parallax')->first();

        if($request->hasFile('parallax')){
            if(File::exists('images/'.$parallax->value)){
                File::delete('images/'.$parallax->value);
            }
            $imageName = time().'.'.$request->parallax->extension();  
            $request->parallax->move(public_path('images'), $imageName);

    
            Setting::where('nama','parallax')->update([
                'value'=>$imageName
            ]);  

        }

      

        return redirect()->route('setting.index')->with('success','Pengaturan Berhasil Diterapkan!');
      }

      public function quote(){
          return view('admin.setting.quote',[
              'quote'=>Setting::where('nama','quote')->first(),
              'quote_author'=>Setting::where('nama','quote_author')->first()
          ]);
      }

      public function quote_update(Request $request){
          Setting::where('nama','quote')->update([
            'value'=>$request->quote
          ]);

          Setting::where('nama','quote_author')->update([
            'value'=>$request->quote_author
          ]);

          return redirect()->route('setting.index')->with('success','Pengaturan Berhasil Diterapkan!');
      }


      public function akun(){
          return view('admin.setting.akun',[
              'user'=>Auth::user()
          ]);
      }

      public function gantipassword(){
          return view('admin.setting.gantipassword',[
              'user'=>Auth::user()
          ]);
      }


      public function updatepassword(){
         return redirect()->route('setting.akun')->with('success','Berhasil merubah password!');
      }

    

}
