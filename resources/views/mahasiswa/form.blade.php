@extends('layouts.master')
@section('content')
<div class="main-content container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="mycardLabel33">Tambah Data</h4>
                </div>
                <div class="card-content">
                <div class="card-body">
                <form class="form form-vertical" method="post" enctype="multipart/form-data" action="{{ url('admin/mahasiswa/add') }}">
                    @csrf
                        <div class="row">
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="nim">Nim</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" name="nim" id="nim" value="{{old('nim')}}">
                                    <div class="form-control-icon">
                                        <i data-feather="hash"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">

                            <div class="form-group has-icon-left">
                                <label for="nama">Nama</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" name="nama" id="nama" value="{{old('nama')}}">
                                    <div class="form-control-icon">
                                        <i data-feather="user"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="tanggal">Tanggal Lahir</label>
                                <div class="position-relative">
                                    <input type="date" name="tgl_lahir" class="form-control" id="tanggal" value="{{old('tgl_lahir')}}">
                                    <div class="form-control-icon">
                                        <i data-feather="calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="alamat">Alamat</label>
                                <div class="position-relative">
                                    <textarea type="text" name="alamat" class="form-control" id="alamat" >{{old('alamat')}}</textarea>
                                    <div class="form-control-icon">
                                        <i data-feather="home"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <div class="form-file">
                                    <input type="file" name="photo" class="form-file-input" id="customFile" value="{{old('photo')}}">
                                    <label class="form-file-label" for="customFile">
                                        <span class="form-file-text">Choose file...</span>
                                        <span class="form-file-button">Browse</span>
                                    </label>
                                    @error('photo')
                                        <h4>{{ $message }}</h4>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </form>
                </div>
                </div>
            </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection
