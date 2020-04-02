<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $npm  = "16411011";
    	$nama = "Diki Alfarabi Hadi";

        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web","Ngodings"];
        $hari = ["senin", "selasa"];

    	return view('biodata',['npm' => $npm, 'nama' => $nama , 'matkul' => $pelajaran, 'haris' => $hari]);
    }
}