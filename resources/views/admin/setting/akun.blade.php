@extends('layouts.app')
@section('title','Setting')

@section('content')

<div class="container-fluid">

    
    <div class="row">
        <div class="col-3">
          <a href="{{ route('setting.index') }}" class="btn btn-lg btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        </div>
      </div>

    <div class="row mt-3">
        <div class="col-12">
            <div class="card shadow mb-4 mt-3 account-card">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Pengaturan Akun</h6>
                </div>
                <div class="card-body px-5">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Nama :</label>
                                    <input name="name" type="text" disabled value="{{ $user->name }}" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label for="">Username :</label>
                                    <input name="username" type="text" disabled value="{{ $user->username }}" class="form-control">
                                </div>
                               
                          
                                <div class="button group">
                                    <a href="{{ route('setting.gantipassword') }}"  class="btn btn-primary">
                                        Ganti Password
                                    </a>
                                </div>
                            </div>
                            <div class="col-6 text-center">
                                <ul style="list-style: none;">
                                    <li>
                                        <img class="img-profile img-thumbnail" src="{{ asset($user->picture) }}" alt=""></li>
                                    <li class="mt-3">
                                        <a href="" class="btn btn-primary"> <i class="fas fa-user-edit"></i> Ubah Gambar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection