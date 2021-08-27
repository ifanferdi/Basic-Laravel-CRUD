<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $data['nama'] = 'Ifan Ferdiansyah';
        return view('index', $data);
    }
}
