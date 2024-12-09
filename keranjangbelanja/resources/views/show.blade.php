<!DOCTYPE html>
<html>
<head>
    <title>Detail Keranjang Belanja</title>
</head>
<body>
    <h1>Detail Keranjang Belanja</h1>

    <p>ID: {{ $item->ID }}</p>
    <p>Kode Barang: {{ $item->KodeBarang }}</p>
    <p>Jumlah: {{ $item->Jumlah }}</p>
    <p>Harga: {{ $item->Harga }}</p>
    <p>Total: {{ $item->Jumlah * $item->Harga }}</p>

    <a href="{{ route('keranjangbelanja.index') }}">Kembali</a>
</body>
</html>
