<?php

namespace App\Http\Controllers\profil;

use App\Http\Controllers\Controller;
use App\Models\DataHome;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        $data = DataHome::find(1);

        return view('admin.profil.sejarah', [
            'title' => 'Dashboard | Sejarah',
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        DataHome::create([
            'judul' => $request->judul,
            'cover' => $request->cover,
            'body' => $request->body,
        ]);

        return back();
    }
}
