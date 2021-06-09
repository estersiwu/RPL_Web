<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarregisController extends Controller
{
    public function daftarregiskp()
    {
        $data_regiskp = \App\DaftarRegis_kp::all();
        return view('daftar_regiskp',['data_regiskp' => $data_regiskp]);
    }
}
