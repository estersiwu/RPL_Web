<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function jadwal()
    {
        $data_jadwal = \App\JadwalUjian::all();
        return view('jadwal_ujian.jadwal',['data_jadwal' => $data_jadwal]);
    }

    //public function tambah_jadwal()
    //{
        //return view('jadwal_tambah');
    //}
}
