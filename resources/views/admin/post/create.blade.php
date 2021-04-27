@extends('layouts.app')
@section('title','Buat Postingan')
@section('content')
      <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->

        <div class="row">
          <div class="col-3">
            <a href="{{ route('post.index') }}" class="btn btn-lg btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-8">
            <div class="card shadow mb-4 mt-3">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Buat Postingan</h6>
              </div>
              <div class="card-body">
                     <form method="POST" action="{{ route('post.store') }}" enctype="multipart/form-data">
                      @csrf
                         
                          <div class="form-group">
                            <label for="">Judul : </label>
                            <input name="judul"  value="{{ old('judul') }}" type="text" class="form-control @error('judul') is-invalid @enderror">
                            @error('judul')
                              <div class="alert alert-danger mt-2">{{ $message }}</div>
                          @enderror
                          </div>

                          <div class="form-group">
                            <label for="">Picture :</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" name="picture" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                              </div>  
                              @error('picture')
                              <div class="alert alert-danger mt-2">{{ $message }}</div>
                              @enderror                        
                        </div>

                        <div class="form-group">
                          <label for="">Kategori :</label>
                          @forelse ($category as $item)
                            <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="{{ 'customCheck'.$loop->iteration }}" value="{{ $item->id }}" name="post_category_id[]">
                              <label class="custom-control-label" for="{{ 'customCheck'.$loop->iteration }}">{{ $item->nama }}</label>
                            </div>
                          @empty
                          <div class="alert alert-warning" role="alert">
                          Data kategori kosong! anda dapat menambahkan data kategori terlebih dahulu!
                          </div>
                          @endforelse
                          @error('post_category_id')
                          <div class="alert alert-danger mt-2">{{ $message }}</div>
                          @enderror 
                        </div>
                         
                          <div class="form-group">
                            <label for="">Isi :</label>
                            <textarea name="isi" id="editor" >

                            </textarea>

                              @error('isi')
                              <div class="alert alert-danger mt-2">{{ $message }}</div>
                              @enderror                        
                        </div>
                         
                         
                         
                      <div class="row mt-3">
                        <div class="col-12">  
                          <button class="btn btn-primary">Submit</button>
                        </div>
                      </div>
                  
                     </form>
              </div>
          </div>
          </div>
        </div>
        
     
    </div>
    <!-- /.container-fluid -->
@endsection


@push('ckeditor')
<script src="https://cdn.ckeditor.com/ckeditor5/26.0.0/classic/ckeditor.js"></script>
@endpush

@push('ckeditor-script')
<script>
    ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
</script>
@endpush
