<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Jabatan;
use App\Models\TenagaKependidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DosenController extends Controller
{
    public function index()
    {
        $title = 'Dashboard | List Dosen';
        $data = Dosen::paginate(10);
        if (request('search')) {
            $data = Dosen::where('nama', 'like', '%' . request('search') . '%')
                ->orWhere('nip', 'like', '%' . request('search') . '%')
                ->orWhere('nidn', 'like', '%' . request('search') . '%')->paginate(10);
        }

        return view('admin.dosen.list-dosen', [
            'title' => $title,
            'data' => $data,
        ]);
    }

    public function dosenById($id = null)
    {
        $data = Dosen::find($id);
        $title = 'Dashboard | Form Dosen';
        $header = 'Form Dosen';
        $semuaJabatan = Jabatan::all();

        return view('admin.dosen.form-dosen', [
            'title' => $title,
            'header' => $header,
            'data' => $data,
            'semuaJabatan' => $semuaJabatan,
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
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
            if (request()->is('dashboard/dosen*')) {
                $imgName = $request->file('foto')->store('img/foto-dosen');
            } else {
                $imgName = $request->file('foto')->store('img/foto-tenaga-kependidikan');
            }
        }

        Dosen::create([
            'nama' => ucfirst($request->nama),
            'foto' => $imgName,
            'nip' => $request->nip,
            'nidn' => $request->nidn,
            'email' => $request->email,
            'jabatan_id' => $request->jabatan,
        ]);
        return redirect('/dashboard/dosen/list-dosen')->with('success', 'Data dosen berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $dosen = Dosen::find($id);
        $rules = [
            'nama' => 'required',
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
            'jabatan_id' => $request->jabatan,
        ]);

        return redirect('/dashboard/dosen/list-dosen')->with('success', 'Data dosen berhasil diupdate!');
    }

    public function destroy($id)
    {
        $dosen = Dosen::find($id);
        $nama = $dosen->nama;
        if ($dosen->foto != null) Storage::delete($dosen->foto);
        $dosen->delete();

        return back()->with('success', "Data dengan nama (<i>$nama</i>) berhasil dihapus!");
    }

    // Halaman depan
    public function semuaDosen()
    {
        $data = Dosen::paginate(15);
        $title = 'Fakultas Hukum | Daftar Dosen';
        if (request('search')) {
            $data = Dosen::where('nama', 'like', '%' . request('search') . '%')
                ->orWhere('nip', 'like', '%' . request('search') . '%')
                ->orWhere('nidn', 'like', '%' . request('search') . '%')->paginate(15);
        }

        return view('home.dosen.daftar-dosen', [
            'title' => $title,
            'semuaDosen' => $data,
        ]);
    }
}
