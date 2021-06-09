<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LihatjadwalController extends Controller
{
    public function jadwalujian()
    {
        $data_jadwal = \App\Lihatjadwal::all();
        return view('jadwal_ujian.jadwalujian',['data_jadwal' => $data_jadwal]);
    }
}
