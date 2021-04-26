@extends('layouts.app')
@section('title','Carousel')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->

          <div class="row">
            <div class="col-3">
              <a href="{{ route('setting.home') }}" class="btn btn-lg btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-3">
              <a href="{{ route('carousel.create') }}" class="btn btn-sm btn-primary"> <i class="fas fa-plus"></i> Tambah</a>
            </div>
          </div>
        
          <div class="row mt-3">
            @foreach ($carousel as $item)

              <div class="col-12 col-md-3">

                <div class="card mr-3" >
                  <img src="{{ $item->picture }}" style="height:200px;" class="card-img-top img-fluid" alt="...">
                  <div class="card-body">
                    <form method="POST" class="d-flex justify-content-around" action="{{ route('carousel.destroy',$item->id) }}">
                      @csrf
                      @method('delete')
                      <a href="#" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                      <button class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                    </form>
                  </div>
                </div>

              </div>
              
              @endforeach
          </div>
          
        </div>
      <!-- /.container-fluid -->
@endsection
