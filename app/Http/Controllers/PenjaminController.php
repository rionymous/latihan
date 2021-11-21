<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjaminController extends Controller
{
    public function index()
    {
        $penjamin = DB::table('tbl_penjamin')->get();

        return view('setup/penjamin',['tbl_penjamin'=> $penjamin]);
    }

    public function tambah()
    {
        return view('setup/penjamintambah');
    }

    public function store(Request $request)
    {
        DB::table('tbl_penjamin')->insert([
            'nama_penjamin'=>$request->nama_penjamin
        ]);

        return redirect('setup/penjamin');
    }

    public function hapus($id)
    {
        DB::table('tbl_penjamin')->where('id', $id)->delete();

        return redirect('setup/penjamin');

    }
}
