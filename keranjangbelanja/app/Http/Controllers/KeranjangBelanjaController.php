<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\KeranjangBelanja;

class KeranjangBelanjaController extends Controller
{
    public function index()
{
    $items = DB::table('keranjangbelanja')->paginate(10); // Atur jumlah item per halaman
    return view('index', ['items' => $items]);
}

    // Menampilkan form untuk menambahkan data baru
    public function create()
    {
        return view('create');
    }

    // Menyimpan data baru ke database
        // Menyimpan data baru ke database
        public function store(Request $request)
        {
            $request->validate([
                'KodeBarang' => 'required|integer',
                'Jumlah' => 'required|integer',
                'Harga' => 'required|integer',
            ]);

            DB::table('keranjangbelanja')->insert([
                'KodeBarang' => $request->KodeBarang,
                'Jumlah' => $request->Jumlah,
                'Harga' => $request->Harga,
            ]);

            return redirect()->route('keranjangbelanja.index')
                             ->with('success', 'Data berhasil ditambahkan.');
        }


    // Menampilkan detail data keranjang belanja
    public function show($id)
    {
        $item = DB::table('keranjangbelanja')->find($id);
        return view('show', ['item' => $item]);
    }

    // Menampilkan form untuk mengedit data
    public function edit($id)
    {
        $item = DB::table('keranjangbelanja')->find($id);
        return view('edit', ['item' => $item]);
    }

    // Mengupdate data di database
    public function update(Request $request, $id)
    {
        $request->validate([
            'KodeBarang' => 'required|integer',
            'Jumlah' => 'required|integer',
            'Harga' => 'required|integer',
        ]);

        DB::table('keranjangbelanja')
            ->where('id', $id)
            ->update([
                'KodeBarang' => $request->KodeBarang,
                'Jumlah' => $request->Jumlah,
                'Harga' => $request->Harga,
            ]);

        return redirect()->route('keranjangbelanja.index')
                         ->with('success', 'Data berhasil diperbarui.');
    }

    // Menghapus data dari database
    public function destroy($id)
    {
        DB::table('keranjangbelanja')->delete($id);
        return redirect()->route('keranjangbelanja.index')
                         ->with('success', 'Data berhasil dihapus.');
    }
}
