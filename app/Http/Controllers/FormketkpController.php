<?php

namespace App\Http\Controllers;

use App\Keterangan_kp;
use Illuminate\Http\Request;

class FormketkpController extends Controller
{
    public function form_ketkp()
    {
        $data_ketkp = \App\Keterangan_kp::all();
        return view('pengajuanketerangankp.form_ketkp',['data_ketkp' => $data_ketkp]);
    }

    public function tambah_ketkp(Request $request)
    {
        \App\Keterangan_kp::create($request->all());
        return redirect('/pengajuanketerangankp')->with('sukses','Formulir Berhasil diSubmit');
    }

    public function store(Request $request)
    {
        \App\Keterangan_kp::create([
            'semester' => $request->input('semester'),
            'tahun' => $request->input('tahun'),
            'nim' => $request->input('nim'),
            'lembaga' => $request->input('lembaga'),
            'pimpinan' => $request->input('pimpinan'),
            'no_telp' => $request->input('no_telp'),
            'alamat' => $request->input('alamat'),
            'fax' => $request->input('fax'),
            'dokumen' => $request->input('dokumen')
        ]);

        return redirect('/pengajuanketerangankp')->with('sukses','Formulir Berhasil diSubmit');

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
        //return $request->all();
    //}

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
