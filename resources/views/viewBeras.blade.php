@extends('master2')
@section('judulhalaman', 'View Data Produk Beras')

@section('konten')

    <h1 class="title p-3 text-center">View Data Produk Beras</h1>

    @foreach ($tokoberas as $b)
    <form action="/tokoberas/store" method="post" class="form-horizontal">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="row">
                        <div class="card" style="width:1500px">
                            <img class="card-img-top" src="img_avatar1.png" alt="Foto Produk">
                            <div class="card-body">
                              <h4 class="card-title text-center">{{ $b->merkBeras }}</h4>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="col-6">
                    <ul>
                        <div class="form-group row">
                            <label for="merkBeras" class="col-md-4"><b>Nama Produk</b></label>
                            <div class="col-md-8">
                                <label>:    {{ $b->merkBeras }}</label>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stockBeras" class="col-md-4"><b>Stock Produk</b></label>
                            <div class="col-md-8">
                                 <label>:   {{ $b->stockBeras}}</label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tersedia" class="col-md-4"><b>Keterangan </b></label>
                            <div class="col-md-8">
                                <label>:    {{ $b->tersedia }}</label>
                            </div>
                        </div>
                    </ul>
                    <a href="/tokoberas" class="btn btn-success">Oke</a>
                </div>
            </div>
        </div>
    </form>
    @endforeach
@endsection
