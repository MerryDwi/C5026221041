@extends('master2')

@section('title', 'Keranjang Belanja')

@section('konten')

    <h3>Keranjang Belanja</h3>

    <a href="/keranjangbelanja/beli" class="btn btn-primary"> + Beli </a>
    <br>
    <br/>

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per Item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach ($keranjangbelanja as $k)
            <tr>
                <td>{{ $k->IDBarang }}</td>
                <td>{{ $k->KodeBarang }}</td>
                <td>{{ $k->Jumlah }}</td>
                <td>{{ number_format($k->Harga,0,',','.') }}</td>
                <td>{{ number_format(($k->Harga * $k->Jumlah),0,',','.') }}</td>
                <td  class="btn-group">

                    <a href="/keranjangbelanja/hapus/{{ $k->IDBarang }}" class="btn btn-danger  ">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
