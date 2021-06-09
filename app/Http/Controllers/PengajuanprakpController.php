<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanprakpController extends Controller
{
    public function pengajuan_prakp()
    {
        $data_prakp = \App\Pengajuanprakp::all();
        return view('pengajuanprakp.pengajuan_prakp',['data_prakp' => $data_prakp]);
    }

    public function addprakp(Request $request)
    {
        \App\Pengajuanprakp::create($request->all());
        return redirect('/pengajuanprakp')->with('sukses','Formulir Berhasil diSubmit');
    }

    public function keep(Request $request)
    {
        $this->validate($request, [
            'semester'=>'required',
            'tahun'=>'required',
            'nim'=>'required',
            'nik'=>'required',
            'tools'=>'required',
            'spesifikasi'=>'required',
            'dokumen'=>'required',
            'lembaga'=>'required',
            'pimpinan'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required'
        ]);

        \App\Pengajuanprakp::create([
            'semester'=>$request->input('semester'),
            'tahun'=>$request->input('tahun'),
            'nim'=>$request->input('nim'),
            'nik'=>$request->input('nik'),
            'tools'=>$request->input('tools'),
            'spesifikasi'=>$request->input('spesifikasi'),
            'dokumen'=>$request->input('dokumen'),
            'lembaga'=>$request->input('lembaga'),
            'pimpinan'=>$request->input('pimpinan'),
            'alamat'=>$request->input('alamat'),
            'no_telp'=>$request->input('no_telp')

        ]);

        return redirect('/pengajuanprakp')->with('sukses','Formulir Berhasil diSubmit');
        //return redirect('/pengajuanketerangankp')->with(['gagal' => 'Formulir Gagal diSubmit']);
    }

}
