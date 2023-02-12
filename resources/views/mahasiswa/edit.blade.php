@extends('layout.app')

@section('title', 'Edit Data Mahasiswa')
    
@section('content')
<a href="/mahasiswa" class="btn btn-secondary mb-5">Kembali</a>
    <form method="POST" action="{{ '/mahasiswa/'.$data->nim }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <h1>Nomor Induk Mahasiswa : {{ $data->nim }}</h1>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama"
            value="{{ $data->nama }}" >
        </div>
        <div class="mb-3">
            <label for="prodi" class="form-label">Prodi</label>
            <input type="text" class="form-control" name="prodi" id="prodi"
            value="{{ $data->prodi }}" >
        </div>
        <div class="mb-3">
            <label for="fakultas" class="form-label">Fakultas</label>
            <input type="text" class="form-control" name="fakultas" id="fakultas"
            value="{{ $data->fakultas }}">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection