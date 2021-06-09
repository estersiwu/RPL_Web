<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatakpController extends Controller
{
    public function datakp()
    {
        $data_kp = \App\Datakp::all();
        return view('pengajuankp.data_kp',['data_kp' => $data_kp]);
    }

    public function download(Request $request, $file)
    {
        //return response()->download($file, 'filename.pdf', $file);
        return response()->download(public_path('img/'.$file));
        //$pathToFile=storage_path()."/app/".$file->filename;
        //return response()->download($pathToFile);
    }
}
