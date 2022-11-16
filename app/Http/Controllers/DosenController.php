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
        if (request()->is('dashboard/dosen/list-dosen*') || request()->is('dosen/daftar-dosen*')) {
            $title = 'Dashboard | List Dosen';
            $data = Dosen::latest()->paginate(10);
            if (request('search')) {
                $data = Dosen::where('nama', 'like', '%' . request('search') . '%')
                    ->orWhere('nip', 'like', '%' . request('search') . '%')
                    ->orWhere('nidn', 'like', '%' . request('search') . '%')->paginate(10);
            }
        }
        if (request()->is('dashboard/tenaga-kependidikan*')) {
            $title = 'Dashboard | List Tenaga Kependidikan';
            $data = TenagaKependidikan::latest()->paginate(10);
            if (request('search')) {
                $data = TenagaKependidikan::where('nama', 'like', '%' . request('search') . '%')
                    ->orWhere('nip', 'like', '%' . request('search') . '%')->paginate(10);
            }
        }

        return view('admin.dosen.list-dosen', [
            'title' => $title,
            'data' => $data,
        ]);
    }

    public function dosenById($id = null)
    {
        if (request()->is('dashboard/dosen/list-dosen*')) {
            $data = Dosen::find($id);
            $title = 'Dashboard | ';
            $header = 'Form Dosen';
        } else {
            $data = TenagaKependidikan::find($id);
            $title = 'Dashboard | ';
            $header = 'Form Tenaga Kependidikan';
        }
        $semuaJabatan = Jabatan::all();

        return view('admin.dosen.form-dosen', [
            'title' => 'Dashboard | ' . $header,
            'header' => $header,
            'data' => $data,
            'semuaJabatan' => $semuaJabatan,
        ]);
    }

    public function store(Request $request)
    {
        if (request()->is('dashboard/dosen*')) {
            $rules = [
                'nama' => 'required',
                'nidn' => 'required',
                'email' => 'required',
                'jabatan' => 'required',
            ];
        } else {
            $rules = [
                'nama' => 'required',
                'email' => 'required',
                'jabatan' => 'required',
            ];
        }

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

        if (request()->is('dashboard/dosen*')) {
            Dosen::create([
                'nama' => ucfirst($request->nama),
                'foto' => $imgName,
                'nip' => $request->nip,
                'nidn' => $request->nidn,
                'email' => $request->email,
                'jabatan_id' => $request->jabatan,
            ]);
            return redirect('/dashboard/dosen/list-dosen')->with('success', 'Data dosen berhasil ditambahkan!');
        } else {
            TenagaKependidikan::create([
                'nama' => ucfirst($request->nama),
                'foto' => $imgName,
                'nip' => $request->nip,
                'email' => $request->email,
                'jabatan_id' => $request->jabatan,
            ]);
            return redirect('/dashboard/tenaga-kependidikan')->with('success', 'Data tenaga kependidikan berhasil ditambahkan!');
        }
    }

    public function update(Request $request, $id)
    {
        if (request()->is('dashboard/dosen*')) {
            $dosen = Dosen::find($id);
            $rules = [
                'nama' => 'required',
                'nidn' => 'required',
                'email' => 'required',
                'jabatan' => 'required',
            ];
        } else {
            $tenagaKependidikan = TenagaKependidikan::find($id);
            $rules = [
                'nama' => 'required',
                'email' => 'required',
                'jabatan' => 'required',
            ];
        }

        if ($request->has('foto')) {
            $rules['foto'] = 'image|mimes:png,jpg,jpeg|max:4096';
        }
        $validatedData = $request->validate($rules);


        if (request()->is('dashboard/dosen/list-dosen')) {
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
        } else {
            $imgName = $tenagaKependidikan->foto;
            if ($request->has('foto')) {
                if ($imgName != null) Storage::delete($tenagaKependidikan->foto);
                $imgName = $request->file('foto')->store('img/foto-tenaga-kependidikan');
            }

            $tenagaKependidikan->update([
                'nama' => ucfirst($request->nama),
                'foto' => $imgName,
                'nip' => $request->nip,
                'email' => $request->email,
                'jabatan_id' => $request->jabatan,
            ]);

            return redirect('/dashboard/tenaga-kependidikan')->with('success', 'Data tenaga kependidikan berhasil diupdate!');
        }
    }

    public function destroy($id)
    {
        if (request()->is('dashboard/dosen*')) {
            $dosen = Dosen::find($id);
            $nama = $dosen->nama;
            if ($dosen->foto != null) Storage::delete($dosen->foto);
            $dosen->delete();
        } else {
            $tenagaKependidikan = TenagaKependidikan::find($id);
            $nama = $tenagaKependidikan->nama;
            if ($tenagaKependidikan->foto != null) Storage::delete($tenagaKependidikan->foto);
            $tenagaKependidikan->delete();
        }

        return back()->with('success', "Data dengan nama (<i>$nama</i>) berhasil dihapus!");
    }

    // Halaman depan
    public function semuaDosen()
    {
        if (request()->is('dosen*')) {
            $data = Dosen::paginate(15);
            $title = 'Fakultas Hukum | Daftar Dosen';
            if (request('search')) {
                $data = Dosen::where('nama', 'like', '%' . request('search') . '%')
                    ->orWhere('nip', 'like', '%' . request('search') . '%')
                    ->orWhere('nidn', 'like', '%' . request('search') . '%')->paginate(15);
            }
        } else {
            $data = TenagaKependidikan::paginate(15);
            $title = 'Fakultas Hukum | Daftar Tenaga Kependidikan';
            if (request('search')) {
                $data = TenagaKependidikan::where('nama', 'like', '%' . request('search') . '%')
                    ->orWhere('nip', 'like', '%' . request('search') . '%')->paginate(15);
            }
        }

        return view('home.dosen.daftar-dosen', [
            'title' => $title,
            'semuaDosen' => $data,
        ]);
    }
}
