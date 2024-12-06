<!DOCTYPE html>
@extends('template')

@section('tulisan1', isset($kursi) ? 'Edit Data Kursi' : 'Edit Data Pegawai')

@section('link1')
<a href="{{ isset($kursi) ? '/kursi' : '/pegawai' }}">Kembali</a>
@endsection

@section('konten')
<form action="{{ isset($kursi) ? '/kursi/update' : '/pegawai/update' }}" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ isset($kursi) ? $kursi[0]->kodekursi : $pegawai[0]->pegawai_id }}">

    <!-- Input Nama atau Merk -->
    <div class="row mb-3">
        <label for="nama" class="col-sm-2 col-form-label">{{ isset($kursi) ? 'Merk Kursi' : 'Nama' }}</label>
        <div class="col-sm-10">
            <input type="text" name="{{ isset($kursi) ? 'merkkursi' : 'nama' }}" class="form-control" id="nama" required
            value="{{ isset($kursi) ? $kursi[0]->merkkursi : $pegawai[0]->pegawai_nama }}">
        </div>
    </div>

    @if(isset($kursi))
    <!-- Input Stock Kursi -->
    <div class="row mb-3">
        <label for="stockkursi" class="col-sm-2 col-form-label">Stock Kursi</label>
        <div class="col-sm-10">
            <input type="number" name="stockkursi" class="form-control" id="stockkursi" required
            value="{{ $kursi[0]->stockkursi }}">
        </div>
    </div>

    <!-- Input Status Tersedia -->
    <div class="row mb-3">
        <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
        <div class="col-sm-10">
            <select name="tersedia" class="form-select" id="tersedia" required>
                <option value="T" {{ $kursi[0]->tersedia == 'T' ? 'selected' : '' }}>Tersedia</option>
                <option value="H" {{ $kursi[0]->tersedia == 'H' ? 'selected' : '' }}>Habis</option>
            </select>
        </div>
    </div>
    @else
    <!-- Input Jabatan -->
    <div class="row mb-3">
        <label for="jabatan" class="col-sm-2 col-form-label">Jabatan</label>
        <div class="col-sm-10">
            <input type="text" name="jabatan" class="form-control" id="jabatan" required
            value="{{ $pegawai[0]->pegawai_jabatan }}">
        </div>
    </div>

    <!-- Input Umur -->
    <div class="row mb-3">
        <label for="umur" class="col-sm-2 col-form-label">Umur</label>
        <div class="col-sm-10">
            <input type="number" name="umur" class="form-control" id="umur" required
            value="{{ $pegawai[0]->pegawai_umur }}">
        </div>
    </div>

    <!-- Input Alamat -->
    <div class="row mb-3">
        <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <textarea name="alamat" class="form-control" id="alamat" rows="3" required>{{ $pegawai[0]->pegawai_alamat }}</textarea>
        </div>
    </div>
    @endif

    <!-- Tombol Submit -->
    <div class="row mb-3">
        <div class="col-sm-10 offset-sm-6">
            <input type="submit" class="btn btn-primary" value="Simpan Data">
        </div>
    </div>
</form>
@endsection
