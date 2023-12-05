@extends('master2')
@section('judulhalaman', 'Edit Data Pegawai')

@section('konten')

	<h2 class="text-center"><a href="https://www.malasngoding.com ">www.malasngoding.com</a></h2>
	<h3 class="text-center">Edit Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

        @foreach($pegawai as $p)
        <form action="/pegawai/update" method="post">
            {{ csrf_field() }}
            <div class="form-group row">
                <label for="nama" class="col-md-2">Nama</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama"
                        name="nama" value="{{ $p->pegawai_nama }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2" for="jabatan">Jabatan</label>
                <div class="col-md-10">
                    <input name="jabatan" type="text" class="form-control" id="jabatan" placeholder="Jabatan" value="{{ $p->pegawai_jabatan }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2" for="Umur">Umur</label>
                <div class="col-md-10">
                    <input name="umur" type="number" class="form-control" id="Umur" placeholder="Enter Umur" value="{{ $p->pegawai_umur }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-2" for="alamat">Alamat </label>
                <div class="col-md-10">
                    <textarea name="alamat" class="form-control" id="alamat" placeholder="Enter Alamat">{{ $p->pegawai_alamat }}</textarea>
                </div>
            </div>
            <input type="hidden" name="id" value="{{ $p->pegawai_id }}">
            <input type="submit" value="Simpan Data" class="btn btn-primary">
        </form>
        @endforeach
@endsection

