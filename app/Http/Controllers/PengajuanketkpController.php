<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuanketkpController extends Controller
{
    public function pengajuan_ketkp()
    {
        $data_ketkp = \App\Pengajuanketkp::all();
        return view('pengajuanketerangankp.pengajuan_ketkp',['data_ketkp' => $data_ketkp]);
    }

    public function addketkp(Request $request)
    {
        \App\Pengajuanketkp::create($request->all());
        return redirect('/pengajuanketerangankp')->with('sukses','Formulir Berhasil diSubmit');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'semester'=>'required',
            'tahun'=>'required',
            'nim'=>'required',
            'lembaga'=>'required',
            'pimpinan'=>'required',
            'no_telp'=>'required',
            'alamat'=>'required',
            'fax'=>'required',
            'dokumen'=>'required'
        ]);

        \App\Pengajuanketkp::create([
            'semester'=>$request->input('semester'),
            'tahun'=>$request->input('tahun'),
            'nim'=>$request->input('nim'),
            'lembaga'=>$request->input('lembaga'),
            'pimpinan'=>$request->input('pimpinan'),
            'no_telp'=>$request->input('no_telp'),
            'alamat'=>$request->input('alamat'),
            'fax'=>$request->input('fax'),
            'dokumen'=>$request->input('dokumen')
        ]);
        //\App\Keterangan_kp::create($request->all());

        return redirect('/pengajuanketerangankp')->with('sukses','Formulir Berhasil diSubmit');
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
