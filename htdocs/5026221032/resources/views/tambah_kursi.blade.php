<!DOCTYPE html>
@extends('template')

@section('tulisan1', 'Tambah Data Kursi')

@section('link1')
<a href="/kursi">Kembali</a>
@endsection

@section('konten')
<form action="/kursi/store" method="post">
    {{ csrf_field() }}

    <!-- Input Merk Kursi -->
    <div class="row mb-3">
        <label for="merkkursi" class="col-sm-2 col-form-label">Merk Kursi</label>
        <div class="col-sm-10">
            <input type="text" name="merkkursi" class="form-control" id="merkkursi" required>
        </div>
    </div>

    <!-- Input Stock Kursi -->
    <div class="row mb-3">
        <label for="stockkursi" class="col-sm-2 col-form-label">Stock Kursi</label>
        <div class="col-sm-10">
            <input type="number" name="stockkursi" class="form-control" id="stockkursi" required>
        </div>
    </div>

    <!-- Input Status Tersedia -->
    <div class="row mb-3">
        <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
        <div class="col-sm-10">
            <select name="tersedia" class="form-select" id="tersedia" required>
                <option value="T">Tersedia</option>
                <option value="H">Habis</option>
            </select>
        </div>
    </div>

    <!-- Tombol Submit -->
    <div class="row mb-3">
        <div class="col-sm-10 offset-sm-6">
            <input type="submit" class="btn btn-success" value="Simpan Data">
        </div>
    </div>
</form>
@endsection
