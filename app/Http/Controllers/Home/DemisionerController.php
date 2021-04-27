<?php

namespace App\Http\Controllers\Home;

use App\Gallery;
use App\Setting;
use App\Demisioner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DemisionerController extends BaseController
{
    public function index(){
        return view('home.demisioner.index',[
            'gallery'=>Gallery::paginate(12),
            'instagram'=>Setting::where('nama','instagram')->first(),
        ]);
    }
}
