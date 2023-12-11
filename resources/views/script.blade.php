@extends('master2')
@section('judulhalaman', 'View Pesan')

@section('konten')

    <h1 class="title p-3 text-center">View Hasil Pesan</h1>

    @foreach ($chat as $c)
    <form action="/chat/store" method="post" class="form-horizontal">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="card" style="width:1500px">
                            <img class="gambar 1" src="pictures 1" alt="Foto Produk">
                        </div>
                    </div>
                    <div class="row">
                        <div class="card" style="width:1500px">
                            <img class="gambar 2" src="pictures 2" alt="Foto Produk">
                        </div>
                    </div>
                    <div class="row">
                        <div class="card" style="width:1500px">
                            <img class="gambar 3" src="pictures 3" alt="Foto Produk">
                        </div>
                    </div>
                    <div class="row">
                        <div class="card" style="width:1500px">
                            <img class="gambar 4" src="pictures 4" alt="Foto Produk">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </form>
    @endforeach
@endsection
