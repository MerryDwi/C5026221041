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
            'tersedia' => $request->stockBeras > 0 ? 't' : 'N'
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/tokoberas');
	}
    public function edit($KodeBeras)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$tokoberas = DB::table('tokoberas')->where('KodeBeras',$KodeBeras)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editBeras',['tokoberas' => $tokoberas]);
	}
    public function update(Request $request)
	{
		// update data pegawai
		DB::table('tokoberas')->where('KodeBeras',$request->KodeBeras)->update([
			'merkBeras' => $request->merkBeras,
			'stockBeras' => $request->stockBeras,
            'tersedia' => $request->stockBeras > 0 ? 't' : 'N',

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
    public function viewberas($KodeBeras)
	{
    	// mengambil data pegawai berdasarkan id yang dipilih
		$tokoberas = DB::table('tokoberas')->where('KodeBeras',$KodeBeras)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('viewBeras',['tokoberas' => $tokoberas]);

	}
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$tokoberas = DB::table('tokoberas')
		->where('merkBeras','like',"%".$cari."%")
        ->paginate();;

    		// mengirim data pegawai ke view index
		return view('index2',['tokoberas' => $tokoberas, 'cari' => $cari]);

	}

}
