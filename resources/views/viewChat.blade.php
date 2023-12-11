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
                            <img class="card-img-top" src="img_avatar1.png" alt="Foto Produk">
                            <div class="card-body">
                              <h4 class="card-title text-center">{{ $c->pesan }}</h4>
                            </div>
                          </div>
                    </div>
                </div>
                <div class="col-6">
                    <ul>
                        <div class="form-group row">
                            <label for="pesan" class="col-md-4"><b>Pesan</b></label>
                            <div class="col-md-8">
                                <label>:    {{ $c->pesan }}</label>

                            </div>
                        </div>
                    </ul>
                    <a href="/chat" class="btn btn-success">Oke</a>
                </div>
            </div>
        </div>
    </form>
    @endforeach
@endsection
