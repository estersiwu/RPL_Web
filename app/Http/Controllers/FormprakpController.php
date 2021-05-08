<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormprakpController extends Controller
{
    public function add_prakp()
    {
        $data_prakp = \App\Prakp::all();
        return view('pengajuanprakp.add_prakp');
    }

    public function create(Request $request)
    {
        \App\Prakp::create($request->all());
        return $request->all();
    }
}
