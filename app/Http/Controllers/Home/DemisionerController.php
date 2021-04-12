<?php

namespace App\Http\Controllers\Home;

use App\Gallery;
use App\Setting;
use App\Demisioner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DemisionerController extends Controller
{
    public function index(){
        return view('home.demisioner.index',[
            'gallery'=>Gallery::paginate(12),
            'instagram'=>Setting::where('nama','instagram')->first(),
            'facebook'=>Setting::where('nama','facebook')->first(),
            'alamat'=>Setting::where('nama','alamat')->first(),
            'phone'=>Setting::where('nama','phone')->first(),
            'email'=>Setting::where('nama','email')->first(),
            'story'=>Setting::where('nama','story')->first(),
            'story_pic'=>Setting::where('nama','story_pic')->first(),
            'quote'=>Setting::where('nama','quote')->first(),
            'quote_author'=>Setting::where('nama','quote_author')->first(),
            'parallax'=>Setting::where('nama','parallax')->first(),
        ]);
    }
}
