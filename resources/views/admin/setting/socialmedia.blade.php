@extends('layouts.app')
@section('title','Setting')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-8">
            <div class="card shadow mb-4 mt-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Social Media Setting</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('setting.socialmedia.update') }}">
                        @csrf
                        <div class="form-group">
                            <label for="">Link Instagram</label>
                            <input name="instagram" type="text" value="{{ $instagram->value }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Link Facebook</label>
                            <input name="facebook" type="text" value="{{ $facebook->value }}" class="form-control">
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