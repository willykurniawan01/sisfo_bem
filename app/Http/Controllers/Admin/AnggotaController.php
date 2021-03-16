<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Anggota;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\File;

use function PHPSTORM_META\elementType;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.anggota.index', ['anggota' => Anggota::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.anggota.create');
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
            'nim'=>'required|unique:anggotas|string',
            'nama'=>'required|string',
            'jabatan'=>'required|string',
            'jenis_kelamin'=>'required|string',
            'picture'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'imei'=>'required|unique:anggotas',
            'no_hp'=>'required|numeric',
            'email'=>'required|unique:anggotas|email'
        ]);

        $imageName = time().'.'.$request->picture->extension();  
        $request->picture->move(public_path('images'), $imageName);

        Anggota::create([
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'jabatan'=>$request->jabatan,
            'jenis_kelamin'=>$request->jenis_kelamin,
            'picture'=>URL::to('images').'/'.$imageName,
            'imei'=>$request->imei,
            'no_hp'=>$request->no_hp,
            'email'=>$request->email
        ]);

     return redirect()->route('anggota.index')->with('success','Berhasil Menambahkan Data Anggota!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.anggota.show',['anggota'=>Anggota::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.anggota.edit',['anggota'=>Anggota::findOrFail($id)]);
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
        $anggota=Anggota::findOrFail($id);
        $picture=explode('/',$anggota->picture);
     

        $request->validate([
            'nim'=>'numeric',
            'nama'=>'string',
            'jabatan'=>'string',
            'jenis_kelamin'=>'string',
            'picture'=>'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'no_hp'=>'numeric',
            'email'=>'email'
        ]);


        //cek ada gambar atau tidak
        if($request->hasFile('picture')){
            if(File::exists('images/'.$picture[4])){
                File::delete('images/'.$picture[4]);
            }
            $imageName = time().'.'.$request->picture->extension();  
            $request->picture->move(public_path('images'), $imageName);

            $anggota->update([
                'nim'=>$request->nim,
                'nama'=>$request->nama,
                'jabatan'=>$request->jabatan,
                'jenis_kelamin'=>$request->jenis_kelamin,
                'picture'=>URL::to('images').'/'.$imageName,
                'imei'=>$request->imei,
                'no_hp'=>$request->no_hp,
                'email'=>$request->email
            ]);
        }else{
            $anggota->update($request->except('_token'));
        }

     

     return redirect()->route('anggota.index')->with('success','Berhasil Mengupdate Data Anggota!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anggota=Anggota::findOrFail($id);
        $picture=explode('/',$anggota->picture);
      
        if(File::exists('images/'.$picture[4])){ 
        File::delete('images/'.$picture[4]);
        Anggota::destroy($id);
        }
        
        return redirect()->route('anggota.index')->with('success','Berhasil Menghapus Data Anggota!');
    }
}
