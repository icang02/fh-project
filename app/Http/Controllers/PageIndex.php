<?php

namespace App\Http\Controllers;

use App\Models\DataHome;
use Illuminate\Http\Request;

class PageIndex extends Controller
{
    public function index($menu = '')
    {
        return view('home.page.data', [
            'title' => "Fakultas Hukum | " . str()->title($menu),
            'data' => DataHome::find($menu),
        ]);
    }
}
