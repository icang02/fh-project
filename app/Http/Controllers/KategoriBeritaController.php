<?php

namespace App\Http\Controllers;

use App\Models\KategoriBerita;
use Illuminate\Http\Request;

class KategoriBeritaController extends Controller
{
    public function index()
    {
        $data = KategoriBerita::paginate(10);
        if (request('search')) {
            $data = KategoriBerita::where('nama', 'like', '%' . request('search') . '%')->paginate(10);
        }

        return view('admin.berita.kategori-berita', [
            'title' => 'Dashboard | Kategori Berita',
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required|unique:kategori_berita',
        ];

        $validatedData = $request->validate($rules);
        KategoriBerita::create(['nama' => $request->nama]);

        return back()->with('success', 'Kategori berita berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $kategoriBerita = KategoriBerita::find($id);
        $rules = [
            'nama' => 'required|unique:kategori_berita',
        ];
        if (str()->lower($kategoriBerita->nama) == str()->lower($request->nama)) $rules['nama'] = 'required';

        $validatedData = $request->validate($rules);
        $kategoriBerita->update(['nama' => $request->nama]);

        return back()->with('success', 'Kategori berita berhasil diupdate!');
    }

    public function destroy($id)
    {
        $kategoriBerita = KategoriBerita::find($id);
        $kategoriBerita->delete();

        return back()->with('success', 'Kategori berita berhasil dihapus!');
    }

    public function batas(Request $request)
    {
        dd($request->batas);
    }
}
