<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MalasngodingController extends Controller
{
    public function input()
    {
        return view('input');
    }
 
    public function proses(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi cuy!!!',
            'min'      => ':attribute harus diisi minimal :min karakter ya cuy!!!',
            'max'      => ':attribute harus diisi maksimal :max karakter ya cuy!!!',
            'numeric'  => ':attribute harus diisi nomor ya cuy!!!',
        ];

        $this->validate($request,[
           'nama'    => 'required|min:5|max:20',
           'jabatan' => 'required',
           'umur'    => 'required|numeric',
           'alamat'  => 'required',
        ],$messages);
 
        // return view('proses',['data' => $request]);

        DB::table('pegawai')->insert([
            'pegawai_nama'    => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur'    => $request->umur,
            'pegawai_alamat'  => $request->alamat
        ]);
        // alihkan halaman ke halaman pegawai
            return redirect('/pegawai');
    }
}
