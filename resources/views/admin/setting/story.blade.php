@extends('layouts.app')
@section('title','Story')
@section('content')
      <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->

        <div class="row">
          <div class="col-3">
            <a href="{{ route('setting.index') }}" class="btn btn-lg btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-md-8">
            <div class="card shadow mb-4 mt-3">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Story Setting</h6>
              </div>
              <div class="card-body">
                     <form method="POST" action="{{ route('setting.story.update') }}" enctype="multipart/form-data">
                      @csrf  
                     

                          <div class="form-group">
                            <label for="">Story Picture</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                  <input type="file" name="story_pic" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                  <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                              </div>                
                        </div>
                         
                          <div class="form-group">
                            <label for="">Story</label>
                            <textarea name="story" id="editor" >
                              {{ $story->value }}
                            </textarea>
                  
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
