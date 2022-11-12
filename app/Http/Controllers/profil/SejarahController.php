<?php

namespace App\Http\Controllers\profil;

use App\Http\Controllers\Controller;
use App\Models\DataHome;
use Illuminate\Http\Request;

class SejarahController extends Controller
{
    public function index($menu)
    {
        // Menu Profil
        // if ($menu == 'sejarah') $id = 1;
        // if ($menu == 'visi-misi') $id = 2;
        // if ($menu == 'tujuan') $id = 3;
        // if ($menu == 'sasaran-strategis') $id = 4;
        // if ($menu == 'personalia') $id = 5;
        // if ($menu == 'struktur-organisasi') $id = 6;
        // if ($menu == 'tenaga-pendidikan') $id = 7;
        // if ($menu == 'tenaga-kependidikan') $id = 8;

        return view('admin.profil.sejarah', [
            'title' => 'Dashboard | ' . $menu,
            'data' => DataHome::find($menu),
            'header' => $menu,
        ]);
    }

    public function store(Request $request, $id)
    {
        $rules = [
            'judul' => 'required',
            'body' => 'required',
        ];


        if ($request->has('cover')) {
            $rules['cover'] = 'image|mimes:png,jpg,jpeg|max:4096';
        }

        $validatedData = $request->validate($rules);

        if ($request->has('cover')) {
            $imgName = uniqid() . '-' . time() . '.' . $request->file('cover')->getClientOriginalExtension();
            $path = 'admin-assets/img/data-home';
            $request->file('cover')->move(public_path($path), $imgName);
        }

        DataHome::create([
            'id' => $id,
            'judul' => $request->judul,
            'cover' => $imgName ?? 'carousel-1.jpg',
            'body' => $request->body,
        ]);

        return back()->with('success', "Data berhasil ditambahkan!");
    }

    public function update(Request $request, $id)
    {
        $data = DataHome::find($id);

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

        return back()->with('success', "Data berhasil diupdate!");
    }
}
