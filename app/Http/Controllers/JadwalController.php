<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    public function jadwal()
    {
        $data_jadwal = \App\JadwalUjian::all();
        return view('jadwal_ujian.jadwal',['data_jadwal' => $data_jadwal]);
    }

    public function tambahjadwal(Request $request)
    {

       // $request->validate([
            //'ruang' => 'required',
            //'tanggal' => 'required',
            //'jam' => 'required',
            //'dosen_penguji' => 'required|min:3'
        //]);

        //\App\JadwalUjian::create($request->all());
        //if(!empty($request->input('dosen_penguji'))) {
            //$dosen_penguji = join(',', $request->input('dosen_penguji'));
            //DB::table('dosen_penguji')->insert(['dosen_penguji'=>$dosen_penguji]);
        //}else{
            //$dosen_penguji = '';
        //}

        $requestArray = $request->all();
        $dosen_penguji = implode(",", $requestArray ['dosen_penguji']);
        $arrayTostring = implode(',', $request->input('dosen_penguji'));
        $inputValue['dosen_penguji'] = $arrayTostring;

        \App\JadwalUjian::create([
            'nim' => $request->input('nim'),
            'ruang' => $request->input('ruang'),
            'tanggal' => $request->input('tanggal'),
            'jam' => $request->input('jam'),
            'dosen_penguji' => $dosen_penguji
        ]);

        return redirect('/jadwalujian')->with('sukses','Data Berhasil diTambahkan.');
    }

    public function editjadwal($id)
    {
        //$jadwalujian = $this->jadwalujian;
        $jadwalujian = \App\JadwalUjian::find($id);
        return view('jadwal_ujian/editjadwal',['jadwalujian' => $jadwalujian]);
    }

    public function updatejadwal(Request $request,$id)
    {
        $requestArray = $request->all();
        $dosen_penguji = implode(",", $requestArray ['dosen_penguji']);
        $arrayTostring = implode(',', $request->input('dosen_penguji'));
        $inputValue['dosen_penguji'] = $arrayTostring;

        $jadwalujian = \App\JadwalUjian::find($id);
        //$jadwalujian->update($request->all());
        $jadwalujian->update([
            'nim' => $request->input('nim'),
            'ruang' => $request->input('ruang'),
            'tanggal' => $request->input('tanggal'),
            'jam' => $request->input('jam'),
            'dosen_penguji' => $dosen_penguji
        ]);

        return redirect('/jadwalujian')->with('sukses','Data Berhasil diUpdate');
    }

    public function deletejadwal($id)
    {
        $jadwalujian = \App\JadwalUjian::find($id);
        $jadwalujian->delete($jadwalujian);
        return redirect('/jadwalujian')->with('sukses','Data Berhasil diHapus');
    }

}
