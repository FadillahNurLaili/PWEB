@extends('template')
@section('tulisan1', 'Data Kursi')

@section('link1')
    <a href="/kursi/tambah" class="btn btn-primary">+ Tambah Kursi Baru</a>
@endsection

@section('konten')
<br/>
<form action="/kursi/cari" method="GET">
    <div class="row mb-3">
        <label for="cari" class="col-sm-2 col-form-label">Cari Kursi:</label>
        <div class="col-sm-6">
            <input type="text" name="cari" class="form-control" id="cari" placeholder="Cari Kursi .." value="{{ old('cari') }}">
        </div>
        <div class="col-sm-4">
            <input type="submit" value="CARI" class="btn btn-success">
        </div>
    </div>
</form>
<br/>

<table class="table table-striped table-hover">
    <tr>
        <th>Kode Kursi</th>
        <th>Merk Kursi</th>
        <th>Stock</th>
        <th>Tersedia</th>
        <th>Opsi</th>
    </tr>
    @foreach($kursi as $k)
    <tr>
        <td>{{ $k->kodekursi }}</td>
        <td>{{ $k->merkkursi }}</td>
        <td>{{ $k->stockkursi }}</td>
        <td>{{ $k->tersedia == 'T' ? 'Tersedia' : 'Habis' }}</td>
        <td>
            <a href="/kursi/edit/{{ $k->kodekursi }}" class="btn btn-info">Edit</a> |
            <a href="/kursi/hapus/{{ $k->kodekursi }}" class="btn btn-danger">Hapus</a>
        </td>
    </tr>
    @endforeach
</table>

<br/>
Halaman : {{ $kursi->currentPage() }} <br/>
Jumlah Data : {{ $kursi->total() }} <br/>
Data Per Halaman : {{ $kursi->perPage() }} <br/>
{{ $kursi->links() }}
@endsection
