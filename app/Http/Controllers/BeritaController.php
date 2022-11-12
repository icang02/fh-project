<?php

namespace App\Http\Controllers;

use App\Models\KategoriBerita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index($nama)
    {
        if ($nama == 'ui-greenmetric') $nama = 'Ui Greenmetric';
        $berita = KategoriBerita::where('nama', $nama)->get();
        $beritaId = $berita[0]->id;

        return view('home.berita.informasi', [
            'title' => 'Fakultas Hukum | ' . $berita[0]->nama,
            'data' => KategoriBerita::find($beritaId)->berita,
        ]);
    }
}
