<?php

namespace App\Http\Controllers\Api;

use App\Anggota;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function Login(Request $request){
        if($user=User::where('nim',$request->nim)->first()){
            //Cek Password
            if(Hash::check($request->password, $user->password)){
                $token=$user->createToken('access_token')->plainTextToken;

                return response()->json([
                    'token'=>$token,
                    'user'=>$user
                ]);
            }
        }
    }

    public function Register (Request $request){
        //Cek anggota
        if($anggota=Anggota::where('nim',$request->nim)->first()){
                $user=User::create([
                    'username'=>$anggota->nama,
                    'password'=>bcrypt($request->password),
                    'nim'=>$request->nim,
                ]);

                if($user){
                    $token=$user->createToken('access_token')->plainTextToken;
                    return response()->json([
                        'message'=>'Pendaftaran Berhasil!',
                        'token'=>$token,
                        'user'=>$user
                    ],201);
                }
        }else{
            return response()->json([
                'message'=>'Anda bukan anggota BEM SAR!'
            ],401);
        }
    }
}
