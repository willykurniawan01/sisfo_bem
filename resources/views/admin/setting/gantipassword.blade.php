@extends('layouts.app')
@section('title','Setting')

@section('content')

<div class="container-fluid">

    
    <div class="row">
        <div class="col-3">
          <a href="{{ route('setting.akun') }}" class="btn btn-lg btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        </div>
      </div>

    <div class="row mt-3">
        <div class="col-8">
            <div class="card shadow mb-4 mt-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Ganti Password</h6>
                </div>
                <div class="card-body">

                    <form method="POST" action="{{ route('setting.updatepassword',Auth::user()->id) }}">
                        @csrf
                        <div class="form-group">
                            <label for="">Password Lama</label>
                            <input name="old_password" type="password"  class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Password</label>
                            <input name="new_password" type="password"  class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input name="new_password_confirm" type="password"  class="form-control">
                        </div>

                       
                  
                        <div class="button group">
                            <button type="submit" href="{{ route('setting.gantipassword') }}"  class="btn btn-primary">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection