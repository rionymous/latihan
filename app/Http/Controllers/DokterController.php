<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        return view('setup/dokter');
    }

    public function tambah()
    {
        return view('setup/doktertambah');
    }
}
