<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\TenagaKependidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\Flysystem\UrlGeneration\TemporaryUrlGenerator;

class TenagaKependidikanController extends Controller
{
    public function index()
    {
        $title = 'Dashboard | List Tenaga Kependidikan';
        $data = TenagaKependidikan::latest()->paginate(10);
        if (request('search')) {
            $data = TenagaKependidikan::where('nama', 'like', '%' . request('search') . '%')
                ->orWhere('nip', 'like', '%' . request('search') . '%')->paginate(10);
        }

        return view('admin.dosen.list-tenaga-kependidikan', [
            'title' => $title,
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $rules = [
            'nama' => 'required',
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

        TenagaKependidikan::create([
            'nama' => ucfirst($request->nama),
            'foto' => $imgName,
            'nip' => $request->nip,
            'email' => $request->email,
            'jabatan_id' => $request->jabatan,
        ]);
        return redirect('/dashboard/tenaga-kependidikan')->with('success', 'Data tenaga kependidikan berhasil ditambahkan!');
    }

    public function update(Request $request, $id)
    {
        $dosen = TenagaKependidikan::find($id);
        $rules = [
            'nama' => 'required',
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
            'email' => $request->email,
            'jabatan_id' => $request->jabatan,
        ]);

        return redirect('/dashboard/tenaga-kependidikan')->with('success', 'Data tenaga kependidikan berhasil diupdate!');
    }

    public function destroy($id)
    {
        $dosen = TenagaKependidikan::find($id);
        $nama = $dosen->nama;
        if ($dosen->foto != null) Storage::delete($dosen->foto);
        $dosen->delete();

        return back()->with('success', "Data dengan nama (<i>$nama</i>) berhasil dihapus!");
    }

    public function dosenById($id = null)
    {
        $data = TenagaKependidikan::find($id);
        $title = 'Dashboard | Form Tenaga Kependidikan';
        $header = 'Form Tenaga Kependidikan';
        $semuaJabatan = Jabatan::all();

        return view('admin.dosen.form-tenaga-kependidikan', [
            'title' => $title,
            'header' => $header,
            'data' => $data,
            'semuaJabatan' => $semuaJabatan,
        ]);
    }

    public function semuaDosen()
    {
        $data = TenagaKependidikan::paginate(15);
        $title = 'Fakultas Hukum | Daftar Dosen';
        if (request('search')) {
            $data = TenagaKependidikan::where('nama', 'like', '%' . request('search') . '%')
                ->orWhere('nip', 'like', '%' . request('search') . '%')
                ->orWhere('nidn', 'like', '%' . request('search') . '%')->paginate(15);
        }

        return view('home.dosen.daftar-dosen', [
            'title' => $title,
            'semuaDosen' => $data,
        ]);
    }
}
