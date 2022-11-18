<?php

namespace App\Http\Controllers;

use App\Models\DataHome;
use Illuminate\Http\Request;

class PageIndexController extends Controller
{
    public function index($menu = 'Jaminan Mutu')
    {
        $data = DataHome::find($menu);
        // dd($menu);

        return view('home.page.data', [
            'title' => "Fakultas Hukum | " . str()->title($menu),
            'data' => $data,
        ]);
    }
}
