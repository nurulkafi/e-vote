@extends('layouts.master')
@section('content')
@section('Mahasiswa','active')
<div class="main-content container-fluid">
    <div class="row" id="table-borderless">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Table Mahasiswa</h4>
            </div>
            <div class="card-content">
              <div class="card-body">
                    <a href="mahasiswa/tambah" class="btn icon icon-left btn-primary">
                        <i data-feather="user-plus"></i>
                        Tambah Data
                    </a>
              </div>
              {{-- modal --}}
              <div class="modal fade text-left" id="large" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel17" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"
                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myModalLabel17">Detail Mahasiswa</h4>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <img  src="assets/images/samples/inspirational-aerial-landscape-autumn-forest-and-FU2LKHA.jpg"
                                                        class="gambar" alt="singleminded" height="300" width="200">
                                                </div>
                                                <div class="col-md-8">
                                                    <div class="card-body">
                                                        <h5 class="card-title" id="nim2">Tes</h5>
                                                        <h5 class="card-title" id="nama2">Tes</h5>
                                                        <h5 class="card-title" id="tanggal-lahir">Tes</h5>
                                                        <p class="card-text" id="alamat2">
                                                            Chocolate sesame snaps apple pie danish cupcake sweet roll jujubes
                                                            tiramisu.Gummies
                                                            bonbon apple pie fruitcake icing biscuit apple pie jelly-o sweet roll.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-secondary"
                                                data-bs-dismiss="modal">
                                                <i class="bx bx-x d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Close</span>
                                            </button>
                                            <button type="button" class="btn btn-primary ml-1"
                                                data-bs-dismiss="modal">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Accept</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
              </div>
              <div class="modal fade text-left" id="hapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel110" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                    role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-danger">
                            <h5 class="modal-title white" id="myModalLabel110">
                                Peringatan!</h5>
                            <button type="button" class="close"
                                data-bs-dismiss="modal" aria-label="Close">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                        <div class="modal-body" id="test">
                            Apakah Anda Yakin Akan Menghapus Data?
                        </div>
                        <div class="modal-footer">
                                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                                    <i class="bx bx-x d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">No</span>
                                </button>

                                <a class="btn btn-danger ml-1 yesdel">
                                    <i class="bx bx-check d-block d-sm-none"></i>
                                    <span class="d-none d-sm-block">Yes</span>
                                </a>
                        </div>
                    </div>
                </div>
              </div>
              <!-- table with no border -->
              <div class="table-responsive">
                <table class="table mb-0" id="table1">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NIM</th>
                      <th>NAMA</th>
                      <th>TANGGAL LAHIR</th>
                      <th>ALAMAT</th>
                      <th>ACTION</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->tgl_lahir }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td><!-- Button trigger for large size modal -->
                            <div class="buttons">
                                <a class="btn icon icon-left btn-dark ShowData" data-bs-toggle="modal"
                                data-bs-target="#large" data-id="{{ $item->nim }}">
                                <i data-feather="eye"></i>
                                Detail
                            </a>
                            <a href="mahasiswa/edit/{{ $item->id }}" class="btn icon icon-left btn-info"><i data-feather="edit"></i> Edit</a>
                            <a class="btn icon icon-left btn-danger delete" data-id="{{ $item->user_id }}" id="delete" data-bs-toggle="modal"
                                data-bs-target="#hapus" ><i data-feather="trash" ></i>
                                Hapus</a>
                            </div>
                            <!--large size Modal -->
                        </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>

@endsection
