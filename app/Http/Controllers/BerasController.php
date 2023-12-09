<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BerasController extends Controller
{
	public function index2()
	{
    	// mengambil data dari table tokoberas
		$tokoberas = DB::table('tokoberas')->get();
    	// mengirim data pegawai ke view index
		return view('index2',['tokoberas' => $tokoberas]);
	}

	// method untuk menampilkan view form tambah pegawai
	public function beliBeras()
	{
		// memanggil view tambah
		return view('beliBeras');
	}

    public function store(Request $request)
	{
		// insert data ke table tokoberas
		DB::table('tokoberas')->insert([
			'merkBeras' => $request->merkBeras,
			'stockBeras' => $request->stockBeras,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/tokoberas');
	}

	// method untuk hapus data
	public function hapus($KodeBeras)
	{
		// menghapus data berdasarkan id yang dipilih
		DB::table('tokoberas')->where('KodeBeras',$KodeBeras)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/tokoberas');
	}
}
