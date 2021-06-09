<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataprakpController extends Controller
{
    public function dataprakp()
    {
        $data_prakp = \App\Dataprakp::all();
        return view('pengajuanprakp.data_prakp',['data_prakp' => $data_prakp]);
    }

    public function download(Request $request, $file)
    {
        //return response()->download($file, 'filename.pdf', $file);
        return response()->download(public_path('img/'.$file));
        //$pathToFile=storage_path()."/app/".$file->filename;
        //return response()->download($pathToFile);
    }
}
