<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarBimbinganController extends Controller
{
    public function daftar_bimbingan()
    {
        $daftar_bimbingan = \App\DaftarBimbingan::all();
        return view('daftar_bimbingan.daftarbimbingan',['daftar_bimbingan' => $daftar_bimbingan]);
    }
}
