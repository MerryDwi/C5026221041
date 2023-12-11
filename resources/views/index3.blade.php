@extends('master2')

@section('title', 'Belanja Beras')

@section('konten')

    <h3>Selamat datang, di Jasa Kirim Pesan Riize</h3>

    <a href="/chat/tambahChat" class="btn btn-primary"> + Beli </a>
    <br>
    <br>
    <p>Cari Pesan :</p>
	<form action="/chat/cari" method="GET">

		<input class="form-control" type="text" name="cari" placeholder="Cari Nama Produk .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
        <br>
		<input type="submit" value="CARI" class="btn btn-info">
	</form>
	<br/>

    <table class="table table-striped table-hover">
        <tr>
            <th>id</th>
            <th>Pesan</th>
            <th>Keterangan</th>
            {{-- <th>Keterangan</th>
            <th>Action</th> --}}
            {{-- <th>Total</th>
            <th>Action</th> --}}
        </tr>
        @foreach ($chat as $c)
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->pesan }}</td>
                {{-- <td>{{ $b->stockBeras }}</td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" disabled value="" {{ $b->tersedia == 't' ? 'checked' : '' }} id="flexCheckDefault">
                    </div>
                   </td> --}}


                <td  class="btn-group">

                    <a href="/chat/viewChat/{{ $c->id }}" class="btn btn-success">View</a>
                    |
                    <a href="/chat/edit/{{ $c->id}}" class="btn btn-primary  ">Edit</a>
                    |
                    <a href="/chat/hapus/{{ $c->id }}" class="btn btn-danger  ">Batal</a>

                </td>
            </tr>
        @endforeach
    </table>
@endsection
