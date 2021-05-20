@extends('layouts.master_jadwal')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Jadwal Ujian</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/jadwalujian/{{$jadwalujian->id}}/updatejadwal" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Ruang</label>
                                    <input type="text" name="ruang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Ruangan" value="{{$jadwalujian->ruang}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <span class="glyphicon glyphicon-th"></span>
                                        </div>
                                        <input type="text" name="tanggal" class="form-control" id="picker" aria-describedby="emailHelp" placeholder="Masukan Tanggal" value="{{$jadwalujian->tanggal}}">
                                    </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Jam</label>
                                    <input type="text" name="jam" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jam" value="{{$jadwalujian->jam}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Dosen Penguji</label>
                                    <input type="text" name="dosen_penguji" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Dosen" value="{{$jadwalujian->dosen_penguji}}">
                                </div>
                                    <button type="submit" class="btn btn-warning">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop


