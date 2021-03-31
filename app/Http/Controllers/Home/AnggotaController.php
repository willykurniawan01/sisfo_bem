<?php

namespace App\Http\Controllers\Home;

use App\Anggota;
use App\Gallery;
use App\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnggotaController extends Controller
{
    public function index(){
        return view('home.anggota.index',[
            'parallax_pic'=>Setting::where('nama','parallax_pic')->first(),
            'gallery'=>Gallery::paginate(12),
            'instagram'=>Setting::where('nama','instagram')->first(),
            'facebook'=>Setting::where('nama','facebook')->first(),
            'alamat'=>Setting::where('nama','alamat')->first(),
            'phone'=>Setting::where('nama','phone')->first(),
            'email'=>Setting::where('nama','email')->first(),
        ]);
    }

    public function detail($nim){
        return view('home.anggota.detail',[
            'anggota'=>Anggota::where('nim',$nim)->first(),
            'parallax_pic'=>Setting::where('nama','parallax_pic')->first(),
            'gallery'=>Gallery::paginate(12),
            'instagram'=>Setting::where('nama','instagram')->first(),
            'facebook'=>Setting::where('nama','facebook')->first(),
            'alamat'=>Setting::where('nama','alamat')->first(),
            'phone'=>Setting::where('nama','phone')->first(),
            'email'=>Setting::where('nama','email')->first(),
        ]);
    }
}
