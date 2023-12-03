@extends('master2')
@section('judulhalaman', 'View Data Pegawai')

@section('konten')

    <h1>View Data Pegawai</h1>

    @foreach ($pegawai as $p)
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="card" style="width:400px">
                            <img class="card-img-top" src="img_avatar1.png" alt="Foto Pegawai">
                            <div class="card-body">
                              <h4 class="card-title text-center">{{ $p->pegawai_nama }}</h4>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="col-6">
                    <ul>
                        <h6>Nama : {{ $p->pegawai_nama }}</h6>
                        <h6>Jabatan :{{ $p->pegawai_jabatan }}</h6>
                        <h6>Umur :{{ $p->pegawai_umur }}</h6>
                        <h6>Alamat :{{ $p->pegawai_alamat }}</h6>
                    </ul>
                    <input type="submit" value="OK" class="btn btn-primary">
                </div>
            </div>
        </div>
    @endforeach
@endsection
