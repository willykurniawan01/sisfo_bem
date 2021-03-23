<?php

namespace App\Http\Controllers\Admin;

use App\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
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
          
        return redirect()->route('setting.index')->with('success','Pengaturan Berhasil Diterapkan!');
      }


      public function story(){
        return view('admin.setting.story',[
            'alamat'=>Setting::where('nama','story')->first(),
            'phone'=>Setting::where('nama','story_pic')->first(),
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

    

}
