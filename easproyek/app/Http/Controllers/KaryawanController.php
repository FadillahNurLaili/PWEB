<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function index()
    {
        $karyawan = DB::table('karyawan1')->get();
        return view('index', ['karyawan' => $karyawan]);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        DB::table('karyawan1')->insert([
            'NIP' => $request->NIP,
            'Nama' => $request->Nama,
            'Pangkat' => $request->Pangkat,
            'Gaji' => $request->Gaji
        ]);
        return redirect('/karyawan');
    }

    public function destroy($NIP)
    {
        DB::table('karyawan1')->where('NIP', $NIP)->delete();
        return redirect('/karyawan');
    }
}
