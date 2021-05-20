<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataketkpController extends Controller
{
    public function dataketkp()
    {
        $data_ketkp = \App\Dataketkp::all();
        return view('pengajuanketerangankp.data_ketkp',['data_ketkp' => $data_ketkp]);
    }

    /*public function form_ketkp()
    {
        $data_ketkp = \App\Keterangan_kp::all();
        return view('pengajuanketerangankp.form_ketkp',['data_ketkp' => $data_ketkp]);
    }*/
}
