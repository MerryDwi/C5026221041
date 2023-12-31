<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ChatController extends Controller
{
	public function index3()
	{
    	// mengambil data dari table tokoberas
		$chat = DB::table('chat')->get();
    	// mengirim data pegawai ke view index
		return view('index3',['chat' => $chat]);
	}

	// method untuk menampilkan view form tambah pegawai
	public function tambahChat()
	{
		// memanggil view tambah
		return view('tambahChat');
	}

    public function store(Request $request)
	{
		// insert data ke table tokoberas
		DB::table('chat')->insert([
			'id' => $request->id,
			'pesan' => $request->pesan,
            // 'tersedia' => $request->stockBeras > 0 ? 't' : 'N'
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/chat');
	}
    public function edit($id)
	{
		// mengambil data pegawai berdasarkan id yang dipilih
		$id= DB::table('chat')->where('id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editChat',['chat' => $id]);
	}
    public function update(Request $request)
	{
		// update data pegawai
		DB::table('chat')->where('id',$request->id)->update([
			'id' => $request->id,
			'pesan' => $request->pesan,
            // 'tersedia' => $request->stockBeras > 0 ? 't' : 'N',

		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/chat');
	}

	// method untuk hapus data
	public function hapus($id)
	{
		// menghapus data berdasarkan id yang dipilih
		DB::table('chat')->where('chat',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/chat');
	}
    public function viewChat($id)
	{
    	// mengambil data pegawai berdasarkan id yang dipilih
		$chat = DB::table('chat')->where('id',$id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('viewChat',['chat' => $chat]);

	}
    public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$chat = DB::table('chat')
		->where('pesan','like',"%".$cari."%")
        ->paginate();;

    		// mengirim data pegawai ke view index
		return view('index3',['chat' => $chat, 'cari' => $cari]);

	}
	public function halamanchat()
	{
		// mengambil data dari table chat
		$chat = DB::table('chat')->get();
		// mengirim data chat ke view halamanchat
		return view('script',['chat' => $chat]);
	}
}
