<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

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

    public function edit($id)
    {
        $data = Dosen::find($id);

        return view('admin.dosen.form-dosen', [
            'title' => 'Dashboard | Form Dosen',
            'header' => str()->title("Form Dosen"),
            'data' => $data,
        ]);
    }

    public function destroy($id)
    {
        $dosen = Dosen::find($id);
        // Storage::delete($d->cover);
        $dosen->delete();

        return back()->with('success', 'Data dosen berhasil dihapus!');
    }
}
