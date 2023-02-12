@extends('layout.app')

@section('title', 'Tambah Data Mahasiswa')
    
@section('content')
    <a href="/mahasiswa" class="btn btn-secondary mb-5">Kembali</a>
    <form method="POST" action="/mahasiswa">
        @csrf
        <div class="mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" name="nim" id="nim"
            value="{{ Session::get('nim') }}">
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama"
            value="{{ Session::get('nama') }}" >
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">Prodi</label>
            <input type="text" class="form-control" name="prodi" id="prodi"
            value="{{ Session::get('prodi') }}" >
        </div>
        <div class="mb-3">
            <label for="fakultas" class="form-label">Fakultas</label>
            <input type="text" class="form-control" name="fakultas" id="fakultas"
            value="{{ Session::get('fakultas') }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
@endsection