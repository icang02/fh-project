<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminBeritaController extends Controller
{
    public function index()
    {
        $data = Berita::orderBy('tanggal', 'DESC')->paginate(10);
        if (request('search')) {
            $data = Berita::where('judul', 'like', '%' . request('search') . '%')->orderBy('tanggal', 'DESC')->paginate(10);
        }

        return view('admin.berita.list-berita', [
            'title' => 'Dashboard | Semua Berita',
            'data' => $data,
        ]);
    }


    public function beritaById($id)
    {
        $data = Berita::find($id);
        return view('admin.berita.detail-berita', [
            'title' => 'Dashboard | Detail Berita',
            'data' => $data,
        ]);
    }

    public function formBeritaIndex()
    {
        return view('admin.berita.form-berita', [
            'title' => 'Dashboard | Form Berita',
            'header' => str()->title("Form Berita"),
            'semuaKategori' => KategoriBerita::all(),
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'judul' => 'required',
            'kategori' => 'required',
            'tanggal' => 'required',
            'cover' => 'required|image|mimes:png,jpg,jpeg|max:4096',
            'body' => 'required',
        ];

        $validatedData = $request->validate($rules);

        $imgName = $request->file('cover')->store('img/cover-berita');
        Berita::create([
            'judul' => str()->title($request->judul),
            'kategori_berita_id' => $request->kategori,
            'tanggal' => $request->tanggal,
            'cover' => $imgName,
            'body' => $request->body
        ]);

        return redirect('/dashboard/berita/list-berita')->with('success', 'Berita berhasil dipost!');
    }

    public function edit($id)
    {
        $berita = Berita::find($id);

        return view('admin.berita.form-berita', [
            'title' => 'Dashboard | Edit Berita',
            'header' => str()->title("Edit Berita"),
            'semuaKategori' => KategoriBerita::all(),
            'data' => $berita,
        ]);
    }

    public function update(Request $request)
    {
        $berita = Berita::find($request->id);

        $rules = [
            'judul' => 'required',
            'kategori' => 'required',
            'tanggal' => 'required',
            'body' => 'required',
        ];

        if ($request->kategori == null) {
            $rules['kategori'] = 'required';
        }

        if ($request->has('cover')) {
            $rules['cover'] = 'image|mimes:png,jpg,jpeg|max:4096';
        }
        $validatedData = $request->validate($rules);

        $imgName = $berita->cover;
        if ($request->has('cover')) {
            if ($berita->cover != null) Storage::delete($berita->cover);
            $imgName = $request->file('cover')->store('img/cover-berita');
        }

        $berita->update([
            'judul' => str()->title($request->judul),
            'kategori_berita_id' => $request->kategori,
            'tanggal' => $request->tanggal,
            'cover' => $imgName,
            'body' => $request->body
        ]);

        return redirect('/dashboard/berita/list-berita')->with('success', 'Berita berhasil diupdate!');
    }

    public function destroy($id)
    {
        $berita = Berita::find($id);
        Storage::delete($berita->cover);
        $berita->delete();

        return back()->with('success', 'Berita berhasil dihapus!');
    }

    public function batas(Request $request)
    {
        dd($request->batas);
    }
}
