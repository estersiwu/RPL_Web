<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BataskpController extends Controller
{
    public function bataskp()
    {
        $data_bataskp = \App\Bataskp::all();
        return view('bataskp',['data_bataskp' => $data_bataskp]);
    }

    public function setbataskp(Request $request)
    {

        \App\Bataskp::create([
            'nim' => $request->input('nim'),
            'tanggal_mulai' => $request->input('tanggal_mulai'),
            'tanggal_selesai' => $request->input('tanggal_selesai')
        ]);

        return redirect('/bataskp')->with('sukses','Data Berhasil diTambahkan.');
    }

    public function editbataskp($id)
    {
        //$jadwalujian = $this->jadwalujian;
        $bataskp = \App\Bataskp::find($id);
        return view('/editbataskp',['bataskp' => $bataskp]);
    }

    public function updatebataskp(Request $request,$id)
    {

        $bataskp = \App\Bataskp::find($id);
        $bataskp->update($request->all());

        return redirect('/bataskp')->with('sukses','Data Berhasil diUpdate');
    }

    public function deletebataskp($id)
    {
        $bataskp = \App\Bataskp::find($id);
        $bataskp->delete($bataskp);
        return redirect('/bataskp')->with('sukses','Data Berhasil diHapus');
    }

}
