@include('layouts.head')
<body>
    <div id="app">
            @include('sweetalert::alert')
            @include('layouts.navbar')
            <div class="main-content container-fluid">
                <div class="row">
                    @if ($val == null)
                        @forelse ($data as $item)
                        <?php
                            if($no>3){
                                $no=0;
                            }
                        ?>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header {{ $bg[$no] }}">
                                    <h3 style="color: white" class="text-center"> No {{ $item->no_urut }}</h3>
                                </div>

                                <br>
                                <div class="card-content">
                                    <div class="row">
                                        <div class="col-md-2">
                                        </div>
                                        <div class="col-md-4">
                                            <img src="../{{ $item->Fcalon_ketua->photo }}" alt="Card image cap" height="300" width="200" />
                                            <h5 style="margin-top: 20px">{{ $item->Fcalon_ketua->nama }}</h5>
                                            <h5>{{ $item->Fcalon_ketua->nim }}</h5>
                                            <h6>Calon Ketua</h6>
                                        </div>
                                        <div class="col-md-4">
                                            <img  src="../{{ $item->Fcalon_wakil_ketua->photo }}" alt="Card image cap" height="300" width="200" />
                                            <h5 style="margin-top: 20px">{{ $item->Fcalon_wakil_ketua->nama }}</h5>
                                            <h5>{{ $item->Fcalon_wakil_ketua->nim }}</h5>
                                            <h6>Calon Wakil Ketua</h6>
                                        </div>
                                        <div class="col-md-2">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="{{ url('vote/mhsw') }}" method="post" class="text-center">
                                            @csrf
                                            <input type="hidden" name="paslon_id" value="{{ $item->id }}">
                                            <button type="submit" class="btn btn-success">Pilih</button>
                                            <a class="btn btn-info"  data-bs-toggle="modal" data-bs-target="#exampleModalCenter">Visi & Misi</a>
                                        </form>
                                    </div>
                                    <div class="card-footer {{ $bg[$no] }}">
                                        <h3>&nbsp;</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-centered modal-dialog-scrollable"
                                                    role="document">
                                    <div class="modal-content">
                                        <div class="modal-header bg-info">
                                            <h5 class="modal-title" id="exampleModalCenterTitle" style="color: white">Visi Dan Misi</h5>
                                            <button type="button" class="close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="list-group list-group-horizontal-sm mb-1 text-center"
                                                role="tablist">
                                                <a class="list-group-item list-group-item-action active"
                                                    id="list-sunday-list" data-bs-toggle="list" href="#list-sunday"
                                                    role="tab">Visi</a>
                                                <a class="list-group-item list-group-item-action" id="list-monday-list"
                                                    data-bs-toggle="list" href="#list-monday" role="tab">Misi</a>
                                            </div>
                                            <div class="tab-content text-justify">
                                                <div class="tab-pane fade show active" id="list-sunday" role="tabpanel"
                                                    aria-labelledby="list-sunday-list">
                                                    {!! $item->visi !!}
                                                </div>
                                                <div class="tab-pane fade" id="list-monday" role="tabpanel"
                                                    aria-labelledby="list-monday-list">
                                                    {!! $item->misi !!}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary ml-1"
                                                data-bs-dismiss="modal">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Ok</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php $no++ ?>
                        </div>
                        @empty
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header bg-info">
                                    <h3 style="color: white">Info</h3>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        Data Paslon Masih Kosong!
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforelse
                    @else
                        <div class="col-md-12">
                            <h1>Anda Sudah Memilih</h1>
                        </div>
                    @endif
                </div>
            </div>
    </div>
</body>
@include('layouts.script')
</script>
<html>

