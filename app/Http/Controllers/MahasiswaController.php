<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MahasiswaController extends Controller
{
    
    public function index()
    {
        $data = Mahasiswa::orderBy('nim', 'asc')->paginate(5);
        return view('mahasiswa/index')->with('data', $data);
    }

    
    public function create()
    {
        return view('mahasiswa/create');
    }

    
    public function store(Request $request)
    {

        Session::flash('nim', $request->nim);
        Session::flash('nama', $request->nama);
        Session::flash('prodi', $request->prodi);
        Session::flash('fakultas', $request->fakultas);

        $request->validate([
            'nim'=> 'required',
            'nama'=> 'required',
            'prodi'=> 'required',
            'fakultas'=> 'required'
        ], [
            'nim.required'=> 'NIM wajib diisi',
            'nama.required'=> 'Nama wajib diisi',
            'prodi.required'=> 'Prodi wajib diisi',
            'fakultas.required'=> 'Fakultas wajib diisi'
        ]);

        $data = [
            'nim'=> $request->input('nim'),
            'nama'=> $request->input('nama'),
            'prodi'=> $request->input('prodi'),
            'fakultas'=> $request->input('fakultas'),
        ];

        Mahasiswa::create($data);
        return redirect('mahasiswa')->with('success', 'Berhasil Memasukan Data');

    }

    public function show($id)
    {
        $data = Mahasiswa::where('nim', $id)->first();
        return view('mahasiswa/show')->with('data', $data);
    }

    
    public function edit($id)
    {
        $data = Mahasiswa::where('nim', $id)->first();
        return view('mahasiswa/edit')->with('data', $data);
    }

    
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama'=> 'required',
            'prodi'=> 'required',
            'fakultas'=> 'required'
        ], [
            'nama.required'=> 'Nama wajib diisi',
            'prodi.required'=> 'Prodi wajib diisi',
            'fakultas.required'=> 'Fakultas wajib diisi'
        ]);

        $data = [
            'nama'=> $request->input('nama'),
            'prodi'=> $request->input('prodi'),
            'fakultas'=> $request->input('fakultas'),
        ];

        Mahasiswa::where('nim', $id)->update($data);

        return redirect('/mahasiswa')->with('success', 'Berhasil Melakukan Update Data');
    }

    
    public function destroy($id)
    {
        Mahasiswa::where('nim', $id)->delete();
        return redirect('/mahasiswa')->with('success', 'Berhasil Menghapus Data');
    }
}
