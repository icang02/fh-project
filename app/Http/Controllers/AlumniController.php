<?php

namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AlumniController extends Controller
{
    public function index()
    {
        $data = Alumni::latest()->paginate(10);
        if (request('search')) {
            $data = Alumni::where('nama', 'like', '%' . request('search') . '%')->latest()->paginate(10);
        }

        return view('admin.Alumni.list-alumni', [
            'title' => 'Dashboard | List Alumni',
            'data' => $data
        ]);
    }

    public function detail($id)
    {
        $data = Alumni::find($id);
        return view('admin.Alumni.detail-alumni', [
            'title' => 'Dashboard | Detail Alumni',
            'data' => $data,
        ]);
    }

    public function store(Request $request)
    {
        $nama =  Hash::make($request->nama);
        dd($nama);
        $rules = [
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'hp' => 'required',
            'konsentrasi' => 'required',
            'tanggal_masuk' => 'required',
            'bulan_tahun_lulus' => 'required',
            'status_kerja' => 'required',
            'is_pns' => 'required',
            'kesesuaian_pekerjaan' => 'required',
            'lama_menganggur' => 'required',
        ];

        $validatedData = $request->validate($rules);
        Alumni::create($request->all());

        return back()->with('success', 'Terimas kasih, data Anda telah direkam.');
    }

    public function destroy($id)
    {
        $alumni = Alumni::find($id);
        $nama = $alumni->nama;
        $alumni->delete();

        return back()->with('success', "Data alumni (<i>$nama</i>) berhasil dihapus");
    }
}
