@extends('master2')

@section('title', 'Belanja Beras')

@section('konten')

    <h3>Selamat datang, di Toko Beras Riize</h3>

    <a href="/tokoberas/beliBeras" class="btn btn-primary"> + Beli </a>
    <br>
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
                <td>{{ $b->tersedia }}</td>
               
                <td  class="btn-group">

                    <a href="/tokoberas/hapus/{{ $b->KodeBeras }}" class="btn btn-danger  ">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
