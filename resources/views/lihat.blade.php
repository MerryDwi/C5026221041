@extends('master2')
@section('judulhalaman', 'View Data Pegawai')

@section('konten')

    <h1 class="title p-3 text-center">View Data Pegawai</h1>

    @foreach ($pegawai as $p)
    <form action="/pegawai/store" method="post" class="form-horizontal">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="card" style="width:1500px">
                            <img class="card-img-top" src="img_avatar1.png" alt="Foto Pegawai">
                            <div class="card-body">
                              <h4 class="card-title text-center">{{ $p->pegawai_nama }}</h4>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="col-6">
                    <ul>
                        <div class="form-group row">
                            <label for="nama" class="col-md-2"><b>Nama</b></label>
                            <div class="col-md-10">
                                <label>:    {{ $p->pegawai_nama }}</label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jabatan" class="col-md-2"><b>Jabatan</b></label>
                            <div class="col-md-10">
                                 <label>:   {{ $p->pegawai_jabatan }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="umur" class="col-md-2"><b>Umur</b></label>
                            <div class="col-md-10">
                                <label>:    {{ $p->pegawai_umur }}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat" class="col-md-2"><b>Alamat</b></label>
                            <div class="col-md-10">
                                <label>:    {{ $p->pegawai_alamat }}</label>
                            </div>
                        </div>

                    </ul>
                    <a href="/pegawai" class="btn btn-success">Oke</a>
                </div>
            </div>
        </div>
    </form>
    @endforeach
@endsection
