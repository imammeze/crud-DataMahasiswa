@extends('layout.app')

@section('title', 'Data Mahasiswa')
    
@section('content')
    <div>
        <a href="/mahasiswa" class="btn btn-secondary">Kembali</a>
        <h1 class="py-5">{{ $data->nama }}</h1>
        <p>
            <b>Nomor Induk Mahasiswa</b> {{ $data->nim }} 
        </p>
        <p>
            <b>Prodi</b> {{ $data->prodi }}
        </p>
        <p>
            <b>Fakultas</b> {{ $data->fakultas }}
        </p>
    </div>
@endsection