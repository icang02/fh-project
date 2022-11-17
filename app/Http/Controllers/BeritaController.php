<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index($id)
    {
        $berita = Berita::where('kategori_berita_id', $id)->orderBy('tanggal', 'DESC')->paginate(5);
        $titleKategori = KategoriBerita::find($id)->nama;

        return view('home.berita.index', [
            'title' => "Fakultas Hukum | $titleKategori",
            'header' => $titleKategori,
            'data' => $berita,
            'allBerita' => Berita::orderBy('tanggal', 'DESC')->take(4)->get(),
        ]);
    }

    public function beritaById($kategori, $id)
    {
        $berita = Berita::find($id);
        $berita->increment('views');

        return view('home.berita.detail-berita', [
            'title' => 'Fakultas Hukum | Detail Berita',
            'berita' => $berita,
            'allBerita' => Berita::orderBy('tanggal', 'DESC')->take(4)->get(),
        ]);
    }

    public function searchBerita()
    {
        $berita = Berita::where('judul', 'like', '%' . request('search') . '%')->orderBy('tanggal', 'DESC')->paginate(10);

        return view('home.berita.index', [
            'title' => "Fakultas Hukum | Berita",
            'header' => 'Semua Berita',
            'data' => $berita,
            'allBerita' => Berita::orderBy('tanggal', 'DESC')->take(4)->get(),
        ]);
    }
}
