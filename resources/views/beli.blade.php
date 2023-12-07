@extends('master2')
@section('judulhalaman', 'Beli Barang')

@section('konten')

    <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
    <h3>Beli Barang</h3>

    <a href="/keranjangbelanja"> Kembali</a>

    <br />
    <br />

    <form action="/keranjangbelanja/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="nama" class="col-md-2">Kode Barang</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="KodeBarang" placeholder="Masukkan Kode Barang"
                    name="KodeBarang">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2" for="jabatan">Jumlah</label>
            <div class="col-md-10">
                <input name="Jumlah" type="text" class="form-control" id="Jumlah" placeholder="Masukkan Jumlah">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-md-2" for="Umur">Harga</label>
            <div class="col-md-10">
                <input name="Harga" type="number" class="form-control" id="Harga" placeholder="Masukkan Harga">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="ml-auto btn btn-primary">
    </form>
@endsection
