<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BelanjaController extends Controller
{
	public function index1()
	{
    	// mengambil data dari table keranjangbelanja
		$keranjangbelanja = DB::table('keranjangbelanja')->get();
    	// mengirim data pegawai ke view index
		return view('index1',['keranjangbelanja' => $keranjangbelanja]);
	}

	// method untuk menampilkan view form tambah pegawai
	public function beli()
	{
		// memanggil view tambah
		return view('beli');
	}

    public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
			'Harga' => $request->Harga
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}

	// method untuk hapus data
	public function hapus($IDBarang)
	{
		// menghapus data berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('IDBarang',$IDBarang)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}
}
