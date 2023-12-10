@extends('master2')

@section('title', 'Belanja Beras')

@section('konten')

    <h3>Selamat datang, di Toko Beras Riize</h3>

    <a href="/tokoberas/beliBeras" class="btn btn-primary"> + Beli </a>
    <br>
    <br>
    <p>Cari Produk :</p>
	<form action="/tokoberas/cari" method="GET">

		<input class="form-control" type="text" name="cari" placeholder="Cari Nama Produk .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
        <br>
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Beras</th>
            <th>Merk Beras</th>
            <th>Stock Beras</th>
            <th>Keterangan</th>
            <th>Action</th>
            {{-- <th>Total</th>
            <th>Action</th> --}}
        </tr>
        @foreach ($tokoberas as $b)
            <tr>
                <td>{{ $b->KodeBeras }}</td>
                <td>{{ $b->merkBeras }}</td>
                <td>{{ $b->stockBeras }}</td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" disabled value="" {{ $b->tersedia == 't' ? 'checked' : '' }} id="flexCheckDefault">
                    </div>
                   </td>


                <td  class="btn-group">

                    <a href="/tokoberas/viewBeras/{{ $b->KodeBeras }}" class="btn btn-success">View</a>
                    |
                    <a href="/tokoberas/edit/{{ $b->KodeBeras }}" class="btn btn-primary  ">Edit</a>
                    |
                    <a href="/tokoberas/hapus/{{ $b->KodeBeras }}" class="btn btn-danger  ">Batal</a>

                </td>
            </tr>
        @endforeach
    </table>
@endsection
