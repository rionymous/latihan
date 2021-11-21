<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PoliklinikController extends Controller
{
    public function index()
    {
        $poliklinik = DB::table('tbl_poliklinik')->get();

        return view('setup/poliklinik', ['tbl_poliklinik' => $poliklinik]);
    }

    public function tambah()
    {
        return view ('setup/polikliniktambah');
    }

    public function store(Request $request)
    {
        DB::table('tbl_poliklinik')->insert([
            'nama_poli' => $request->nama_poli,
            'ket_poli' => $request->ket_poli
        ]);

        return redirect('setup/poliklinik');

    }

    public function hapus($id)
    {
        DB::table('tbl_poliklinik')->where('id', $id)->delete();

        return redirect('/poliklinik');
    }
}
