<!DOCTYPE html>
@extends('template')
@section('tulisan1', 'Data Pegawai')

@section('link1')
<a href="/pegawai">Kembali</a>
@endsection

@section('konten')
<form action="/pegawai/store" method="post">
    {{ csrf_field() }}
    <!-- Input Nama -->
    <div class="row mb-3">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" name="nama" class="form-control" id="nama" required>
        </div>
    </div>

    <!-- Input Jabatan -->
    <div class="row mb-3">
        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
        <div class="col-sm-10">
            <input type="text" name="jabatan" class="form-control" id="jabatan" required>
        </div>
    </div>

    <!-- Input Umur -->
    <div class="row mb-3">
        <label for="umur" class="col-sm-2 col-form-label">Umur</label>
        <div class="col-sm-10">
            <input type="number" name="umur" class="form-control" id="umur" required>
        </div>
    </div>

    <!-- Input Alamat -->
    <div class="row mb-3">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <textarea name="alamat" class="form-control" id="alamat" rows="3" required></textarea>
        </div>
    </div>

    <!-- Tombol Submit -->
    <div class="row mb-3">
        <div class="col-sm-10 offset-sm-6">
            <input type="submit" class="btn btn-primary" value="Simpan Data">
        </div>
    </div>
</form>
@endsection
