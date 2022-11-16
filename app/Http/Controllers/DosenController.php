<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jabatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DosenController extends Controller
{
    public function index()
    {
        $data = Dosen::paginate(10);
        if (request('search')) {
            $data = Dosen::where('nama', 'like', '%' . request('search') . '%')
                ->orWhere('jabatan', 'like', '%' . request('search') . '%')
                ->orWhere('nip', 'like', '%' . request('search') . '%')
                ->orWhere('nidn', 'like', '%' . request('search') . '%')->paginate(10);
        }

        return view('admin.dosen.list-dosen', [
            'title' => 'Dashboard | List Dosen',
            'data' => $data,
        ]);
    }

    public function dosenById($id = null)
    {
        $data = Dosen::find($id);
        $semuaJabatan = Jabatan::all();

        return view('admin.dosen.form-dosen', [
            'title' => 'Dashboard | Form Dosen',
            'header' => str()->title("Form Dosen"),
            'data' => $data,
            'semuaJabatan' => $semuaJabatan,
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
            'nip' => 'required',
            'nidn' => 'required',
            'email' => 'required',
            'jabatan' => 'required',
        ];

        if ($request->has('foto')) {
            $rules['foto'] = 'image|mimes:png,jpg,jpeg|max:4096';
        }
        $validatedData = $request->validate($rules);

        $imgName = null;
        if ($request->has('foto')) {
            $imgName = $request->file('foto')->store('img/foto-dosen');
        }

        Dosen::create([
            'nama' => ucfirst($request->nama),
            'foto' => $imgName,
            'nip' => $request->nip,
            'nidn' => $request->nidn,
            'email' => $request->email,
            'jabatan' => $request->jabatan,
        ]);

        return redirect('/dashboard/dosen/list-dosen')->with('success', 'Data dosen berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $dosen = Dosen::find($id);

        $rules = [
            'nama' => 'required',
            'nip' => 'required',
            'nidn' => 'required',
            'email' => 'required',
            'jabatan' => 'required',
        ];

        if ($request->has('foto')) {
            $rules['foto'] = 'image|mimes:png,jpg,jpeg|max:4096';
        }
        $validatedData = $request->validate($rules);

        $imgName = $dosen->foto;
        if ($request->has('foto')) {
            if ($imgName != null) Storage::delete($dosen->foto);
            $imgName = $request->file('foto')->store('img/foto-dosen');
        }

        $dosen->update([
            'nama' => ucfirst($request->nama),
            'foto' => $imgName,
            'nip' => $request->nip,
            'nidn' => $request->nidn,
            'email' => $request->email,
            'jabatan' => $request->jabatan,
        ]);

        return redirect('/dashboard/dosen/list-dosen')->with('success', 'Data dosen berhasil diupdate!');
    }

    public function destroy($id)
    {
        $dosen = Dosen::find($id);
        Storage::delete($dosen->foto);
        $dosen->delete();

        return back()->with('success', 'Data dosen berhasil dihapus!');
    }


    // Halaman depan
    public function semuaDosen()
    {
        $data = Dosen::paginate(10);
        if (request('search')) {
            $data = Dosen::where('nama', 'like', '%' . request('search') . '%')
                ->orWhere('jabatan', 'like', '%' . request('search') . '%')
                ->orWhere('nip', 'like', '%' . request('search') . '%')
                ->orWhere('nidn', 'like', '%' . request('search') . '%')->paginate(10);
        }

        return view('home.dosen.daftar-dosen', [
            'title' => 'Fakultas Hukum | Daftar Dosen',
            'semuaDosen' => $data,
        ]);
    }
}
