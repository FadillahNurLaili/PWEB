<!DOCTYPE html>
<html>
<head>
    <title>Edit Keranjang Belanja</title>
</head>
<body>
    <h1>Edit Keranjang Belanja</h1>

    <form action="{{ route('keranjangbelanja.update', $item->ID) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="KodeBarang">Kode Barang:</label>
        <input type="text" id="KodeBarang" name="KodeBarang" value="{{ $item->KodeBarang }}" required><br><br>

        <label for="Jumlah">Jumlah:</label>
        <input type="text" id="Jumlah" name="Jumlah" value="{{ $item->Jumlah }}" required><br><br>

        <label for="Harga">Harga:</label>
        <input type="text" id="Harga" name="Harga" value="{{ $item->Harga }}" required><br><br>

        <button type="submit">Perbarui</button>
    </form>

    <a href="{{ route('keranjangbelanja.index') }}">Kembali</a>
</body>
</html>
