<?php

namespace App\Http\Controllers\profil;

use App\Http\Controllers\Controller;
use App\Models\DataHome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SejarahController extends Controller
{
    public function index($menu)
    {
        return view('admin.profil.sejarah', [
            'title' => 'Dashboard | ' . str()->title($menu),
            'data' => DataHome::find($menu),
            'header' => str()->title($menu),
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
            $imgName = $request->file('cover')->store('img/data-home');
        }

        DataHome::create([
            'id' => $id,
            'judul' => $request->judul,
            'cover' => $imgName ?? null,
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
            if ($data->cover != null) Storage::delete($data->cover);
            $imgName = $request->file('cover')->store('img/data-home');     // cover baru
        }

        $data->update([
            'judul' => $request->judul,
            'cover' => $imgName,
            'body' => $request->body,
        ]);

        return back()->with('success', "Data berhasil diupdate!");
    }
}
