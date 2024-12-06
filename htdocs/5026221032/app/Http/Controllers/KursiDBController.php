<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KursiDBController extends Controller
{
    public function index()
    {
        $kursi = DB::table('kursi')->paginate(10);
        return view('kursi', ['kursi' => $kursi]);
    }

    public function tambah()
    {
        return view('tambah_kursi');
    }

    public function store(Request $request)
    {
        DB::table('kursi')->insert([
            'merkkursi' => $request->merkkursi,
            'stockkursi' => $request->stockkursi,
            'tersedia' => $request->tersedia,
        ]);
        return redirect('/kursi');
    }

    public function edit($id)
    {
        $kursi = DB::table('kursi')->where('kodekursi', '=', $id)->get();
        return view('edit', ['kursi' => $kursi]);
    }

    public function update(Request $request)
    {
        DB::table('kursi')->where('kodekursi', $request->id)->update([
            'merkkursi' => $request->merkkursi,
            'stockkursi' => $request->stockkursi,
            'tersedia' => $request->tersedia,
        ]);
        return redirect('/kursi');
    }

    public function hapus($id)
    {
        DB::table('kursi')->where('kodekursi', $id)->delete();
        return redirect('/kursi');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $kursi = DB::table('kursi')
            ->where('merkkursi', 'like', "%" . $cari . "%")
            ->paginate(10);
        return view('kursi', ['kursi' => $kursi]);
    }
}
