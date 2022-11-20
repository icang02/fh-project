<?php

namespace App\Http\Controllers;

use App\Models\DataHome;
use Illuminate\Http\Request;

class PageIndexController extends Controller
{
    public function index($menu = 'jaminan-mutu')
    {
        $data = DataHome::find($menu);

        return view('home.page.data', [
            'title' => "Fakultas Hukum | " . str()->title($menu),
            'data' => $data,
        ]);
    }
}
