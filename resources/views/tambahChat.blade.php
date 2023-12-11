@extends('master2')
@section('judulhalaman', 'Pesan Chat')

@section('konten')

    <h2 class="text-center">Selamat Datang, di Jasa Pengiriman chat RIIZE</h2>
    <h3 class="text-center">Berlanggan dan dapatkan keuntungan</h3>

    <a href="/chat"> Kembali</a>

    <br />
    <br />

    <form action="/chat/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="pesan" class="col-md-2">Pesan</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="pesan" placeholder="Ketik Pesan"
                    name="pesan">
            </div>
        </div>
        {{-- <div class="form-group row">
            <label class="col-md-2" for="jabatan">Stock Beras</label>
            <div class="col-md-10">
                <input name="stockBeras" type="text" class="form-control" id="stockBeras" placeholder="Masukkan Jumlah Stock">
            </div>
        </div> --}}
        {{-- <div class="form-group row">
            <label class="col-md-2" for="jabatan">Tersedia</label>
            <div class="col-md-10">
                <input name="tersedia" type="text" class="form-control" id="tersedia" placeholder="Masukkan Jumlah keterangan">
            </div>
        </div> --}}
        <input type="submit" value="Simpan Data" class="ml-auto btn btn-primary">
    </form>
@endsection
