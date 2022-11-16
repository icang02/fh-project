<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        $data = Jabatan::paginate(10);
        if (request('search')) {
            $data = Jabatan::where('nama', 'like', '%' . request('search') . '%')->paginate(10);
        }

        return view('admin.jabatan.list-jabatan', [
            'title' => 'Dashboard | Daftar Jabatan',
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $rules = ['nama' => 'required'];
        $request->validate($rules);

        Jabatan::create(['nama' => str()->title($request->nama)]);
        return back()->with('success', 'Jabatan berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $jabatan = Jabatan::find($id);
        $rules = ['nama' => 'required'];

        if (str()->lower($request->nama) != str()->lower($jabatan->nama)) $rules['nama'] = 'required|unique:jabatan';
        $request->validate($rules);

        $jabatan->update(['nama' => str()->title($request->nama)]);
        return back()->with('success', 'Jabatan berhasil diupdate!');
    }

    public function destroy($id)
    {
        $jabatan = Jabatan::find($id);
        $nama = $jabatan->nama;

        $dosen = Dosen::where('jabatan_id', $id)->get()->first();
        if ($dosen) {
            return back()->with('error', 'Jabatan masih digunakan.');
        }

        $jabatan->delete();
        return back()->with('success', "Jabatan <i>$nama</i> berhasil dihapus!");
    }
}
