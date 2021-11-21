<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PendaftaranController extends Controller
{
    public function index()
    {
        $poliklinik = DB::table('tbl_poliklinik')->get();
        $penjamin = DB::table('tbl_penjamin')->get();
        return view ('pendaftaran',['tbl_poliklinik' => $poliklinik, 'tbl_penjamin' => $penjamin]);
    }
}
