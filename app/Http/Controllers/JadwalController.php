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

    public function tambahjadwal(Request $request)
    {
        \App\JadwalUjian::create($request->all());
        return redirect('/jadwalujian')->with('sukses','Data Berhasil diTambahkan.');
    }

    public function editjadwal($id)
    {
        $jadwalujian = \App\JadwalUjian::find($id);
        return view('jadwal_ujian/editjadwal',['jadwalujian' => $jadwalujian]);
    }

    public function updatejadwal(Request $request,$id)
    {
        $jadwalujian = \App\JadwalUjian::find($id);
        $jadwalujian->update($request->all());
        return redirect('/jadwalujian')->with('sukses','Data Berhasil diUpdate');
    }

    public function deletejadwal($id)
    {
        $jadwalujian = \App\JadwalUjian::find($id);
        $jadwalujian->delete($jadwalujian);
        return redirect('/jadwalujian')->with('sukses','Data Berhasil diHapus');
    }

}
