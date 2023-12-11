@extends('master2')

@section('title', 'Chat')

@section('konten')

	<h3>Edit Pesan</h3>

    @foreach($chat as $c)
    <form action="/chat/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $c->id}}"> <br/>

        <div class="form-group row">
            <label for="pesan" class="col-sm-2 col-form-label">Pesan</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" required="required" name="pesan" value="{{ $c->pesan }}">
            </div>
        </div>

        {{-- <div class="form-group row">
            <label for="stockBeras" class="col-sm-2 col-form-label">Stok Beras</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" required="required" name="stockBeras" value="{{ $b->stockBeras }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" required="required" name="tersedia" value="{{ $b->tersedia }}">
            </div>
        </div> --}}

        <br>

        <a class="btn btn-secondary" href="/chat">Kembali</a>
        <input class="btn btn-primary" type="submit" value="Simpan Data">
	</form>
    @endforeach
    <br/>
    <br/>

@endsection
