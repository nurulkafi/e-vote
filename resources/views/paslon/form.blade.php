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
                <form class="form form-vertical" method="post" action="{{ url('admin/paslon/tambah') }}">
                    @csrf
                        <div class="row">
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="no_urut">no_urut</label>
                                <div class="position-relative">
                                    <input type="text" class="form-control" name="no_urut" id="no_urut" value="{{old('no_urut')}}">
                                    <div class="form-control-icon">
                                        <i data-feather="hash"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                                <div class="form-group">
                                    <label>Calon Ketua</label>
                                    <div class="position-relative">
                                        <select class="form-select" name="calon_ketua">
                                            @foreach ($data as $item)
                                                <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label>Calon Wakil Ketua</label>
                                <div class="position-relative">
                                    <select class="form-select" name="calon_wakil_ketua">
                                        @foreach ($data as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="visi">Visi</label>
                                <div class="position-relative">
                                    <textarea type="text" name="visi" class="form-control" id="editor" >{{old('visi')}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="misi">Misi</label>
                                <div class="position-relative">
                                    <textarea type="text" name="misi" class="form-control" id="editor2" >{{old('misi')}}</textarea>
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
@push('simditor')
<script type="text/javascript" src="{{ asset('js/jquery.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/module.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/hotkeys.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/uploader.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/simditor.js')}}"></script>
<script>
    var editor = new Simditor({
    textarea: $('#editor'),
    upload :false
});
var editor2 = new Simditor({
    textarea: $('#editor2'),
    upload :false
});
</script>
@endpush
@endsection

