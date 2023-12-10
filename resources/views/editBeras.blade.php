@extends('master2')

@section('title', 'Beras')

@section('konten')

	<h3>Edit Data Beras</h3>

    @foreach($tokoberas as $b)
    <form action="/tokoberas/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <input type="hidden" name="KodeBeras" value="{{ $b->KodeBeras }}"> <br/>

        <div class="form-group row">
            <label for="merkBeras" class="col-sm-2 col-form-label">Merk Beras</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" required="required" name="merkBeras" value="{{ $b->merkBeras }}">
            </div>
        </div>

        <div class="form-group row">
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
        </div>

        <br>

        <a class="btn btn-secondary" href="/tokoberas">Kembali</a>
        <input class="btn btn-primary" type="submit" value="Simpan Data">
	</form>
    @endforeach
    <br/>
    <br/>

@endsection
