<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Karyawan</title>
    <!-- Tambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Tambah Data Karyawan</h1>
        <form action="/karyawan" method="POST">
            @csrf
            <div class="mb-3">
                <label for="NIP" class="form-label">NIP:</label>
                <input type="text" class="form-control" id="NIP" name="NIP">
            </div>
            <div class="mb-3">
                <label for="Nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="Nama" name="Nama">
            </div>
            <div class="mb-3">
                <label for="Pangkat" class="form-label">Pangkat:</label>
                <input type="text" class="form-control" id="Pangkat" name="Pangkat">
            </div>
            <div class="mb-3">
                <label for="Gaji" class="form-label">Gaji:</label>
                <input type="text" class="form-control" id="Gaji" name="Gaji">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
    <!-- Tambahkan Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
