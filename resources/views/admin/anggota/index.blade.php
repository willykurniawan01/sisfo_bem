@extends('layouts.app')
@section('title','Anggota')
@section('content')
         <!-- Begin Page Content -->
         <div class="container-fluid">
          <!-- Page Heading -->

          
          <a href="{{ route('anggota.create') }}" class="btn btn-primary">Tambah</a>

          <!-- DataTales Example -->
          <div class="card shadow mb-4 mt-3">
              <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Data Anggota</h6>
              </div>
              <div class="card-body">
                  <div class="table-responsive">
                      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                          <thead>
                              <tr>
                                  <th class="text-center">No</th>
                                  <th class="text-center">Nama</th>
                                  <th class="text-center">NIM</th>
                                  <th class="text-center">Jabatan</th>
                                  <th class="text-center">Picture</th>
                                  <th class="text-center">Action</th>
                              </tr>
                          </thead>
                          <tfoot>
                              <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">NIM</th>
                                <th class="text-center">Jabatan</th>
                                <th class="text-center">Picture</th>
                                <th class="text-center">Action</th>
                              </tr>
                          </tfoot>
                          <tbody>
                            @forelse ($anggota as $item)
                              <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $item->nama }}</td>
                                <td class="text-center">{{ $item->nim }}</td>
                                <td class="text-center">{{ $item->jabatan }}</td>
                                <td class="text-center"><img style="width: 100px; height:100px;" src="{{ $item->picture }}" alt=""></td>
                                <td>
                                  <form method="POST" action="{{ route('anggota.destroy',$item->nim) }}" class="form-inline d-flex justify-content-center">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                    <a href="{{ route('anggota.show',$item->nim) }}" class="btn btn-success ml-2">Detail</i></a>
                                    <a href="{{ route('anggota.edit',$item->nim) }}" class="btn btn-info ml-2"> Edit</a>
                                  </form>
                                </td>
                              </tr>
                            @empty
                              <tr>
                                <td class="text-center" colspan="6">Data Kosong</td>
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
