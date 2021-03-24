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
        <div class="col-8">
            <div class="card shadow mb-4 mt-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Alamat Dan Kontak Setting</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('setting.alamat.update') }}">
                        @csrf
                        <div class="form-group">
                            <label for="">Alamat</label>
                            <input name="alamat" type="text" value="{{ $alamat->value }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Nomor Telepon</label>
                            <input name="phone" type="text" value="{{ $phone->value }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input name="email" type="email" value="{{ $email->value }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Latitude</label>
                            <input name="latitude" type="text" value="{{ $latitude->value }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Longitude</label>
                            <input name="longitude" type="text" value="{{ $longitude->value }}" class="form-control">
                        </div>
                        <div class="button group">
                            <button type="submit" class="btn btn-primary">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection