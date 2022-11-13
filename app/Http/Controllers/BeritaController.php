<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index($nama)
    {
        if ($nama == 'ui-greenmetric') $nama = 'Ui Greenmetric';
        $berita = KategoriBerita::where('nama', $nama)->get();
        $beritaId = $berita[0]->id;

        return view('home.berita.index', [
            'title' => 'Fakultas Hukum | ' . $berita[0]->nama,
            'data' => KategoriBerita::find($beritaId),
            'allBerita' => Berita::latest()->take(4)->get(),
        ]);
    }

    public function beritaById($kategori, $id)
    {
        $berita = Berita::find($id);
        $berita->increment('views');

        return view('home.berita.detail-berita', [
            'title' => 'Fakultas Hukum | Detail Berita',
            'berita' => $berita,
            'allBerita' => Berita::latest()->take(4)->get(),
        ]);
    }
}
