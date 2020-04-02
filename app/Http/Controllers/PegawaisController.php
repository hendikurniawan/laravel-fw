<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// panggil model pegawai
use App\Pegawai;

class PegawaisController extends Controller
{
    public function index()
    {
    	// mengambil data pegawai
		// $pegawai = Pegawai::all();
		// $pegawai = Pegawai::where('id', '>=' , 10)->get();
		// $pegawai = Pegawai::where('id', '=' , 10)->get();
		// $pegawai = Pegawai::where('nama', 'Agus Wijaya')->get(); 
		// mengambil data pegawai yang di namanya ada huruf a 
		// $pegawai = Pegawai::where('nama', 'like' , '%a%')->get();
		$pegawai = Pegawai::all()->pageinate(3);

    	// mengirim data pegawai ke view pegawai
    	return view('pegawai', ['pegawai' => $pegawai]);
    }
}
