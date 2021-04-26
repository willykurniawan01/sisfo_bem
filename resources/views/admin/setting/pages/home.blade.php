@extends('layouts.app')
@section('title','Home Setting')

@section('content')

<div class="container-fluid">

    
    <div class="row">
        <div class="col-3">
          <a href="{{ route('page.index') }}" class="btn btn-lg btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        </div>
      </div>

    <div class="row mt-3">
        <div class="col-8">
            <div class="card shadow mb-4 mt-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Carousel</h6>
                </div>
                <div class="card-body">
                    <div class="alert alert-info" role="alert">
                         Klik tombol kelola untuk mengelola carousel pada halaman home!
                      </div>
                      <a href="{{ route('carousel.index') }}" class="btn btn-success"> <i class="fas fa-wrench"></i> Kelola</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-8">
            <div class="card shadow mb-4 mt-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Quote</h6>
                </div>
                <div class="card-body">
                    <div class="alert alert-info" role="alert">
                        Anda dapat mengatur quote pada halaman home!
                      </div>
                    <form method="POST" action="{{ route('setting.home.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Quote</label>
                            <input name="quote" type="text" value="{{ $quote->value }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Author</label>
                            <input name="quote_author" type="text" value="{{ $quote_author->value }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Quote Background :</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" name="quote_bg" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                              </div>                
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