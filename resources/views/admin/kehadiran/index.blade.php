@extends('layouts.app')
@section('title','Kehadiran')
@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->

          <div class="row">
            <div class="col-3">
              <a href="{{ route('kegiatan.index') }}" class="btn btn-lg btn-primary"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
            </div>
          </div>
          <!-- DataTales Example -->
          <div class="card shadow mb-4 mt-3">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Data Kegiatan BEM STMIK AMIK RIAU</h6>
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr>
                                  <th class="text-center">No</th>
                                  <th class="text-center">Nama Mahasiswa</th>
                                  <th class="text-center">Waktu Absen</th>
                                  <th class="text-center">Keterangan</th>
                                  <th class="text-center">Action</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                                  <th class="text-center">No</th>
                                  <th class="text-center">Nama Mahasiswa</th>
                                  <th class="text-center">Waktu Absen</th>
                                  <th class="text-center">Keterangan</th>
                                  <th class="text-center">Action</th>
                              </tr>
                          </tfoot>
                          <tbody>
                            @forelse ($kehadiran as $item)
                              <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $item->nama }}</td>
                                <td class="text-center">{{ $item->waktu_absensi }}</td>
                                <td class="text-center"><h5><span class="badge badge-{{ ($item->keterangan == 'Hadir') ? 'success' : 'warning'   }}">{{ $item->keterangan }}</span></h5></td>
                                <td> <form method="POST" action="{{ route('kegiatan.destroy',$item->id) }}" class="form-inline d-flex justify-content-center">
                                  @csrf
                                  @method('delete')
                                  <button type="submit" class="btn btn-danger">Hapus</button>
                                  <a href="{{ route('kegiatan.edit',$item->id) }}" class="btn btn-info ml-2"> Edit</a>
                                  <a href="{{ route('kehadiran.show',$item->id) }}" class="btn btn-success ml-2"> Kehadiran</a>
                                </form></td>
                              </tr>
                            @empty
                              <tr>
                                <td class="text-center" colspan="4">Data Kosong</td>
                              </tr>
                            @endforelse
                             
                          </tbody>
                      </table>
                  </div>
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
