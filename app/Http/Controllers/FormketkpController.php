<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormketkpController extends Controller
{
    public function add_ketkp()
    {
        $data_ketkp = \App\Keterangan_kp::all();
        return view('pengajuanketerangankp.add_ketkp');
    }

    public function create(Request $request)
    {
        //\App\Keterangan_kp::create($request->all());
        return $request->all();
    }

    //public function create(Request $request)
    //{
        //\App\Keterangan_kp::create($request->all());
        //if($submit){
            //Alert::success('Data Terkirim');
        //}else{
            //Alert::error('Data Tidak Terkirim');
        //}
        //return redirect()->back();
    //}
    /*public function create(Request $request)
    {
        return view('add_ketkp');
    }

    /*public function submit(Request $request)
    {
        DB::table('form_ketkp')->insert([
            'semester'=> $request->semester,
            'tahun'=> $request->tahun,
            'nim'=> $request->nim,
            'lembaga'=> $request->lembaga,
            'pimpinan'=> $request->pimpinan,
            'no_telp'=> $request->no_telp,
            'alamat'=> $request->alamat,
            'fax'=> $request->fax,
            'dokumen'=> $request->dokumen
        ]);
        return redirect('/pengajuanketerangankp');
    }
    
    /*}
    public function ketkp(Request $request)
    {
        $data = [
            'semester'=>$request->input('semester'),
            'tahun'=>$request->input('tahun'),
            'nim'=>$request->input('nim'),
            'lembaga'=>$request->input('lembaga'),
            'pimpinan'=>$request->input('pimpinan'),
            'no_telp'=>$request->input('no_telp'),
            'alamat'=>$request->input('alamat'),
            'fax'=>$request->input('fax'),
            'dokumen'=>$request->input('dokumen'),
            'status_verifikasi'=>$request->input('status_verifikasi')
        ];
        dd($data);
    }*/
}
