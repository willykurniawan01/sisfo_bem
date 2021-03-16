@extends('layouts.app')
@section('title','Carousel')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->

          <div class="row">
            <div class="col-3">
              <a href="{{ route('carousel.create') }}" class="btn btn-primary">Tambah</a>
            </div>
          </div>
        
          <div class="row mt-3">
              <div class="col-12 d-flex">

                @foreach ($carousel as $item)
                <div class="card mr-3" >
                  <img src="{{ $item->picture }}" style="height:300px; width:300px;" class="card-img-top" alt="...">
                  <div class="card-body">
                    <form method="POST" class="d-flex justify-content-around" action="{{ route('carousel.destroy',$item->id) }}">
                      @csrf
                      @method('delete')
                      <a href="#" class="btn btn-primary">Ubah</a>
                      <button class="btn btn-danger">Hapus</button>
                    </form>
                  </div>
                </div>
                @endforeach

                
               </div>

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
