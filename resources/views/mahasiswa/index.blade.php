@extends('layout.app')

@section('title', 'Data Mahasiswa')
    
@section('content')
    @if (Auth()->user()->level == 'admin')
        <a href="/mahasiswa/create" class="btn btn-primary mb-5">Tambah Data</a>    
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Fakultas</th>
                @if (Auth()->user()->level == 'admin')
                    <th>Aksi</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->prodi }}</td>
                    <td>{{ $item->fakultas }}</td>
                    <td>
                        <a class="btn btn-secondary btn-sm" href='{{ url('/mahasiswa/'.$item->nim) }}'>Detail</a>
                    </td>
                    @if (Auth()->user()->level == 'admin')
                    <td>
                        <a class="btn btn-warning btn-sm" href='{{ url('/mahasiswa/'.$item->nim.'/edit') }}'>Edit</a>
                    </td>
                    <td>
                        <form action="{{ '/mahasiswa/'.$item->nim }}" method="post" onsubmit="return confirm('Yakin ingin menghapus?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
@endsection