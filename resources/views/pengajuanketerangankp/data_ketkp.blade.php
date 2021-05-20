@extends('layouts.master_jadwal')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Pengajuan Surat Keterangan KP</h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Semester</th>
                                            <th>Tahun</th>
                                            <th>NIM</th>
                                            <th>Lembaga</th>
                                            <th>Pimpinan</th>
                                            <th>No. Telp</th>
                                            <th>Alamat</th>
                                            <th>Fax</th>
                                            <th>Dokumen</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_ketkp as $form_ketkp)
                                        <tr>
                                            <td>{{$form_ketkp->semester}}</td>
                                            <td>{{$form_ketkp->tahun}}</td>
                                            <td>{{$form_ketkp->nim}}</td>
                                            <td>{{$form_ketkp->lembaga}}</td>
                                            <td>{{$form_ketkp->pimpinan}}</td>
                                            <td>{{$form_ketkp->no_telp}}</td>
                                            <td>{{$form_ketkp->alamat}}</td>
                                            <td>{{$form_ketkp->fax}}</td>
                                            <td>{{$form_ketkp->dokumen}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
