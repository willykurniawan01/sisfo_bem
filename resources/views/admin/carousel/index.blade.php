@extends('layouts.app')
@section('title','Carousel')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->

          <div class="row">
            <div class="col-3">
              <a href="{{ route('carousel.create') }}" class="btn btn-sm btn-primary">Tambah</a>
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
                      <a href="#" class="badge badge-primary">Ubah</a>
                      <button class="badge btn btn-danger">Hapus</button>
                    </form>
                  </div>
                </div>

              </div>
              
              @endforeach
          </div>
          
        </div>
      <!-- /.container-fluid -->
@endsection

@push('table-style')
  <!-- Custom styles for this page -->
  <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('table-script')
 <!-- Page level plugins -->
 <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
 <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

 <!-- Page level custom scripts -->
 <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>
    
@endpush
