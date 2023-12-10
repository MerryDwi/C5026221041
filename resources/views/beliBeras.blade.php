@extends('master2')
@section('judulhalaman', 'Beli Beras')

@section('konten')

    <h2 class="text-center">Selamat Datang, di Toko Beras Riize</h2>
    <h3 class="text-center">Beli Beras Murah & Berkualitas</h3>

    <a href="/tokoberas"> Kembali</a>

    <br />
    <br />

    <form action="/tokoberas/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="merkBeras" class="col-md-2">Merk Beras</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="merkBeras" placeholder="Masukkan Nama Produk Beras"
                    name="merkBeras">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2" for="jabatan">Stock Beras</label>
            <div class="col-md-10">
                <input name="stockBeras" type="text" class="form-control" id="stockBeras" placeholder="Masukkan Jumlah Stock">
            </div>
        </div>
        {{-- <div class="form-group row">
            <label class="col-md-2" for="jabatan">Tersedia</label>
            <div class="col-md-10">
                <input name="tersedia" type="text" class="form-control" id="tersedia" placeholder="Masukkan Jumlah keterangan">
            </div>
        </div> --}}
        <input type="submit" value="Simpan Data" class="ml-auto btn btn-primary">
    </form>
@endsection
