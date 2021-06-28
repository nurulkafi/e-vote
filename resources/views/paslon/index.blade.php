@extends('layouts.master')
@section('Paslon','active')
@section('content')
<div class="main-content container-fluid">
    <div class="card">
        <div class="card-header">
            <div class="card-title">Table Pasangan Calon</div>
            <div class="content">
                <div class="card-body">
                    <a href="paslon/tambah" class="btn icon icon-left btn-primary">
                        <i data-feather="user-plus"></i>
                        Tambah Data
                    </a>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table mb-0" id="table1">
                        <thead>
                            <tr>
                            <th>No Urut</th>
                            <th>Nama Ketua</th>
                            <th>Nama Wakil Ketua</th>
                            <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->no_urut }}</td>
                                <td>{{ $item->Fcalon_ketua->nama}}</td>
                                <td>{{ $item->Fcalon_wakil_ketua->nama}}</td>
                                <td><!-- Button trigger for large size modal -->
                                    <div class="buttons">
                                    </a>
                                    <a href="paslon/edit/{{ $item->id }}" class="btn icon icon-left btn-info"><i data-feather="edit"></i> Edit</a>
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

        {{-- <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Paslon No Urut {{ $item->no_urut }}</h3>
                </div>
                <div class="card-content">
                    <div class="row">
                        <div class="col-md-1">
                        </div>
                        <div class="col-md-5">
                            <img class="avatar" src="../{{ $item->Fcalon_ketua->photo }}" alt="Card image cap" height="300" width="200" />
                            <center><h5>{{ $item->Fcalon_ketua->nama }}</h5></center>
                            <center><h5>{{ $item->Fcalon_ketua->nim }}</h5></center>
                            <center><h6>Calon Ketua</h6></center>
                        </div>
                        <div class="col-md-5">
                            <img class="avatar"  src="../{{ $item->Fcalon_wakil_ketua->photo }}" alt="Card image cap" height="300" width="200" />
                            <center><h5>{{ $item->Fcalon_wakil_ketua->nama }}</h5></center>
                            <center><h5>{{ $item->Fcalon_wakil_ketua->nim }}</h5></center>
                            <center><h6>Calon Wakil Ketua</h6></center>
                        </div>
                        <div class="col-md-1">
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            <h3>Visi</h3>
                            <p>{!! $item->visi !!}</p>
                            <h3>Misi</h3>
                            <p>{!! $item->misi !!}</p>
                        </p>
                        <button class="btn btn-primary block">Update now</button>
                    </div>
                </div>
            </div>
        </div> --}}
</div>

@endsection
