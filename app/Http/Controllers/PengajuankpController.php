<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuankpController extends Controller
{
    public function pengajuan_kp()
    {
        $data_kp = \App\Pengajuankp::all();
        return view('pengajuankp.pengajuan_kp',['data_kp' => $data_kp]);
    }

    public function addkp(Request $request)
    {
        \App\Pengajuankp::create($request->all());
        return redirect('/pengajuankp')->with('sukses','Formulir Berhasil diSubmit');
    }

    public function hold(Request $request)
    {
        $this->validate($request, [
            'semester'=>'required',
            'tahun'=>'required',
            'nim'=>'required',
            'nik'=>'required',
            'judulkp'=>'required',
            'tools'=>'required',
            'spesifikasi'=>'required',
            'dokumen'=>'required',
            'lembaga'=>'required',
            'pimpinan'=>'required',
            'alamat'=>'required',
            'no_telp'=>'required'
        ]);

        \App\Pengajuankp::create([
            'semester'=>$request->input('semester'),
            'tahun'=>$request->input('tahun'),
            'nim'=>$request->input('nim'),
            'nik'=>$request->input('nik'),
            'judulkp'=>$request->input('judulkp'),
            'tools'=>$request->input('tools'),
            'spesifikasi'=>$request->input('spesifikasi'),
            'dokumen'=>$request->input('dokumen'),
            'lembaga'=>$request->input('lembaga'),
            'pimpinan'=>$request->input('pimpinan'),
            'alamat'=>$request->input('alamat'),
            'no_telp'=>$request->input('no_telp'),
        ]);
        //\App\Keterangan_kp::create($request->all());

        return redirect('/pengajuankp')->with('sukses','Formulir Berhasil diSubmit');
        //return redirect('/pengajuanketerangankp')->with(['gagal' => 'Formulir Gagal diSubmit']);
    }

    /*public function submit(Request $request)
    {
        $form_ketkp = new \App\Form_ketkp;
        $form_ketkp->role = NULL;
        $form_ketkp->semester = $request->semester;
        $form_ketkp->tahun = $request->tahun;
        $form_ketkp->nim = $request->nim;
        $form_ketkp->lembaga = $request->lembaga;
        $form_ketkp->pimpinan = $request->pimpinan;
        $form_ketkp->no_telp = $request->no_telp;
        $form_ketkp->alamat = $request->alamat;
        $form_ketkp->fax = $request->fax;
        $form_ketkp->dokumen = $request->dokumen;
        $form_ketkp->save();

        $request->request->add([$form_ketkp_id => $form_ketkp->id]);
        $form_ketkp = \App\Keterangan_kp::create($request->all());
        return redirect('/form_ketkp')->with('sukses','Formulir Berhasil diSubmit');
    }*/

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
