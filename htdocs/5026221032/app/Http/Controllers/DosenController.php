<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        return "<h1>Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com</h1>";
    }

    public function blog(){
        return view('blog');
    }

    public function biodata(){
        $nama = "nala";
        $umur = 10;
        $hasil = 20+30;
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
        return view('biodata',[
            'nama' => $nama,
            'umur' => $umur,
            'hasil' => $hasil,
            'matkul' => $pelajaran]);
    }
}
