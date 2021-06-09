<?php

namespace App\Http\Controllers;

use App\Dataketkp;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;


class DataketkpController extends Controller
{
    public function dataketkp()
    {
        $data_ketkp = \App\Dataketkp::all();
        return view('pengajuanketerangankp.data_ketkp',['data_ketkp' => $data_ketkp]);
    }

    //public function index()
    //{
        //$data_ketkp = \App\Dataketkp::all();
        //return view('data_ketkp')->with('data_ketkp',$data_ketkp);

    //}

    public function download(Request $request, $file)
    {
        //return response()->download($file, 'filename.pdf', $file);
        return response()->download(public_path('img/'.$file));
        //$pathToFile=storage_path()."/app/".$file->filename;
        //return response()->download($pathToFile);
    }

    public function destroy($id)
    {
        $data_ketkp = \App\Dataketkp::find($id);
        $data_ketkp->delete($data_ketkp);

        return redirect('/datapengajuanketerangankp')->with('sukses', 'Verifikasi Berhasil');
    }

    /*public function store(Request $request)
    {

        $data= new pengajuan_ketkp()

        $file=$request->dokumen;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->dokumen->move('assets',$filename);
        $data->dokumen=$filename;
    }

    public function show()
    {
        $data=Dataketkp
    }*/


}
