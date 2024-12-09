<!DOCTYPE html>
<html>
<head>
    <title>Keranjang Belanja</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .action-buttons {
            display: flex;
            gap: 10px;
        }
        .alert {
            padding: 10px;
            margin-bottom: 20px;
            color: #155724;
            background-color: #d4edda;
            border-color: #c3e6cb;
            border-radius: 4px;
        }
    </style>
</head>
<body class="container">
    <h1 class="mt-5">Keranjang Belanja</h1>

    @if (session('success'))
        <div class="alert">
            {{ session('success') }}
        </div>
    @endif

    <button class="btn btn-primary mb-3" onclick="window.location.href='{{ route('keranjangbelanja.create') }}'">Beli</button>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kode Barang</th>
                <th>Jumlah</th>
                <th>Harga</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
                <tr>
                    <td>{{ $item->ID }}</td>
                    <td>{{ $item->KodeBarang }}</td>
                    <td>{{ $item->Jumlah }}</td>
                    <td>{{ number_format($item->Harga, 0, ',', '.') }}</td>
                    <td>{{ number_format($item->Jumlah * $item->Harga, 0, ',', '.') }}</td>
                    <td>
                        <div class="action-buttons">
                            <a href="{{ route('keranjangbelanja.show', $item->ID) }}" class="btn btn-info btn-sm">Lihat</a>
                            <a href="{{ route('keranjangbelanja.edit', $item->ID) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('keranjangbelanja.destroy', $item->ID) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Batal</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="d-flex justify-content-center">
        {{ $items->links() }}
    </div>
</body>
</html>
