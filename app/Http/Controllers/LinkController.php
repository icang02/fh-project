<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        $data = Link::paginate(10);
        if (request('search')) {
            $data = Link::where('judul', 'like', '%' . request('search') . '%')->paginate(10);
        }

        return view('admin.master-data.link-terkait', [
            'title' => 'Dashboard | Link Terkait',
            'data' => $data,
        ]);
    }

    public function update(Request $request, $id)
    {
        $link = Link::find($id);
        $rules = [
            'link' => 'required',
        ];

        $validatedData = $request->validate($rules);
        $link->update(['link' => $request->link]);

        return back()->with('success', 'Link terkait berhasil diupdate!');
    }
}
