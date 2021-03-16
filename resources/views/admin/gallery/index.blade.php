@extends('layouts.app')
@section('title','Carousel')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->

          <div class="row">
            <div class="col-3">
              <a href="{{ route('gallery.create') }}" class="btn btn-primary">Tambah</a>
            </div>
          </div>
          
        
          <div class="row mt-3">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-12 d-flex flex-wrap">
                    @foreach ($gallery as $item)
                    <div class="card mr-3 mb-3" >
                      <img src="{{ $item->picture }}" style="height:200px; width:200px;" class="card-img-top" alt="...">
                      <div class="card-body">
                        <form method="POST" class="d-flex justify-content-around" action="{{ route('gallery.destroy',$item->id) }}">
                          @csrf
                          @method('delete')
                          <a href="#" class="btn btn-primary">Ubah</a>
                          <button class="btn btn-danger" data-toggle="modal">Hapus</button>
                        </form>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>

               
                <div class="row">
                  <div class="col-12">  
                    {{ $gallery->links() }}
                  </div>
                </div>
               </div>

               <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                  <div class="card-header">
                    Kategori Gallery
                  </div>
                  <ul class="list-group list-group-flush">
                    @forelse ($category as $item)
                    <li class="list-group-item d-flex justify-content-between">
                      {{ $item->nama }} 
                      <form method="POST" action="{{ route('gallery_category.destroy',$item->id) }}" class="form-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form></li>
                    @empty
                    <li class="list-group-item">Tidak ada kategori</li>
                    @endforelse
                    <li class="list-group-item"><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#exampleModal" >Tambah</button></li>
                  </ul>
                </div>
              </div>

          </div>
          
        </div>
      <!-- /.container-fluid -->


      {{-- Modal --}}
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form method="POST" action="{{ route('gallery_category.store') }}">
              @csrf
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                  <label class="col-form-label">Nama Ketegori:</label>
                 <input type="text" name="nama" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
          </div>
        </div>
      </div>
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
