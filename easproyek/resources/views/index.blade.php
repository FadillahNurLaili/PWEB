<!DOCTYPE html>
<html>
<head>
    <title>Data Karyawan</title>
    <!-- Tambahkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Data Karyawan</h1>
        <a href="/karyawan/create" class="btn btn-primary mb-3">Tambah Data</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Pangkat</th>
                    <th>Gaji</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($karyawan as $k)
                <tr>
                    <td>{{ $k->NIP }}</td>
                    <td>{{ $k->Nama }}</td>
                    <td>{{ $k->Pangkat }}</td>
                    <td>{{ number_format($k->Gaji, 0, ',', '.') }}</td>
                    <td>
                        <form action="/karyawan/{{ $k->NIP }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Tambahkan Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
