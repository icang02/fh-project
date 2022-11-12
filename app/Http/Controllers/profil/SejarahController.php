<?php

namespace App\Http\Controllers\profil;

use App\Http\Controllers\Controller;
use App\Models\DataHome;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index()
    {
        if (request()->is('dashboard/profil/sejarah')) {
            $data = DataHome::find(1);
            $header = 'Sejarah';
        } else if (request()->is('dashboard/profil/visi-misi')) {
            $data = DataHome::find(2);
            $header = 'Visi & Misi';
        }

        return view('admin.profil.sejarah', [
            'title' => 'Dashboard | ' . $header,
            'data' => $data,
            'header' => $header,
        ]);
    }

    public function store(Request $request)
    {
        if (request()->is('dashboard/profil/sejarah')) {
            $id = 1;
            $header = 'Sejarah';
        } else if (request()->is('dashboard/profil/visi-misi')) {
            $id = 2;
            $header = 'Visi & Misi';
        }

        $validatedData = $request->validate([
            'judul' => 'required',
            'cover' => 'image|mimes:png,jpg,jpeg|max:4096',
            'body' => 'required',
        ]);

        if ($request->has('cover')) {
            $imgName = uniqid() . '-' . time() . '.' . $request->file('cover')->getClientOriginalExtension();
            $path = 'admin-assets/img/data-home';
            $request->file('cover')->move(public_path($path), $imgName);
        }

        DataHome::create([
            'id' => $id,
            'judul' => $request->judul,
            'cover' => $imgName,
            'body' => $request->body,
        ]);

        return back()->with('success', "Data $header berhasil ditambahkan!");
    }

    public function update(Request $request)
    {
        if (request()->is('dashboard/profil/sejarah')) {
            $data = DataHome::find(1);
            $header = 'Sejarah';
        } else if (request()->is('dashboard/profil/visi-misi')) {
            $data = DataHome::find(2);
            $header = 'Visi & Misi';
        }

        $rules = [
            'judul' => 'required',
            'body' => 'required',
        ];

        if ($request->has('cover')) {
            $rules['cover'] = 'image|mimes:png,jpg,jpeg|max:4096';
        }

        $validatedData = $request->validate($rules);

        $imgName = $data->cover;    // cover lama
        if ($request->has('cover')) {
            $path = 'admin-assets/img/data-home';

            // Hapus cover lama
            unlink("$path/$data->cover");

            // Upload cover baru
            $imgName = uniqid() . '-' . time() . '.' . $request->file('cover')->getClientOriginalExtension();   // cover baru
            $request->file('cover')->move(public_path($path), $imgName);
        }

        $data->update([
            'judul' => $request->judul,
            'cover' => $imgName,
            'body' => $request->body,
        ]);

        return back()->with('success', "Data $header berhasil diupdate!");
    }
}
