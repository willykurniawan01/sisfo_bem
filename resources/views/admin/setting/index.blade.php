@extends('layouts.app')
@section('title','Setting')

@section('content')

<div class="container-fluid">
    <div class="row">

        <div class="col-12 col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <i class="fas fa-user fa-7x"></i>
                        </div>
                        <div class="col-8">  
                            <h5 class="card-title">Akun</h5>
                            <p class="card-text">Mengubah password dan lain-lain.</p>
                            <a href="#" class="btn btn-primary">Ubah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <i class="fas fa-map-marker-alt fa-7x"></i>
                        </div>
                        <div class="col-8">  
                            <h5 class="card-title">Alamat dan Kontak</h5>
                            <p class="card-text">Mengubah Informasi Alamat,Nomor Telepon, Email</p>
                            <a href="{{ route('setting.alamat') }}" class="btn btn-primary">Ubah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <i class="fab fa-instagram fa-7x"></i>
                        </div>
                        <div class="col-8">  
                            <h5 class="card-title">Link Social Media dan Video Youtube</h5>
                            <p class="card-text">Mengubah link Social media.</p>
                            <a href="{{ route('setting.socialmedia') }}" class="btn btn-primary">Ubah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <i class="fas fa-image fa-7x"></i>
                        </div>
                        <div class="col-8">  
                            <h5 class="card-title">Story</h5>
                            <p class="card-text">Mengubah Story BEM</p>
                            <a href="{{ route('setting.story') }}" class="btn btn-primary">Ubah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-8 mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <i class="fas fa-image fa-7x"></i>
                        </div>
                        <div class="col-8">  
                            <h5 class="card-title">Parallax</h5>
                            <p class="card-text">Mengubah Gambar Efek Parallax dan text</p>
                            <a href="{{ route('setting.parallax') }}" class="btn btn-primary">Ubah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
    
@endsection