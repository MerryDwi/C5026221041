@extends('master2')
@section('judulhalaman', 'Data Pegawai')

@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Data Pegawai</h3>

    <a href="/pegawai"> Kembali</a>

    <br />
    <br />

    <form action="/pegawai/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="nama" class="col-md-2">Nama</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama"
                    name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2" for="jabatan">Jabatan</label>
            <div class="col-md-10">
                <input name="jabatan" type="text" class="form-control" id="jabatan" placeholder="Jabatan">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2" for="Umur">Umur</label>
            <div class="col-md-10">
                <input name="umur" type="number" class="form-control" id="Umur" placeholder="Enter Umur">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2" for="alamat">Alamat </label>
            <div class="col-md-10">
                <textarea name="alamat" class="form-control" id="alamat" placeholder="Enter Alamat"></textarea>
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="ml-auto btn btn-primary">
    </form>
@endsection
