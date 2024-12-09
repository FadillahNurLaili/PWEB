<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Keranjang Belanja</title>
</head>
<body>
    <h1>Tambah Data Keranjang Belanja</h1>

    <form action="{{ route('keranjangbelanja.store') }}" method="POST">
        @csrf
        <label for="KodeBarang">Kode Barang:</label>
        <input type="text" id="KodeBarang" name="KodeBarang" required><br><br>

        <label for="Jumlah">Jumlah:</label>
        <input type="text" id="Jumlah" name="Jumlah" required><br><br>

        <label for="Harga">Harga:</label>
        <input type="text" id="Harga" name="Harga" required><br><br>

        <button type="submit">Tambah</button>
    </form>
</body>
</html>
