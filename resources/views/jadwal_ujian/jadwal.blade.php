@extends('layouts.master_jadwal')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Jadwal Ujian</h3>
                                <div class="right">
                                    <button type="button" class="btn"><l class="lnr lnr-plus-circle" data-toggle="modal" data-target="#exampleModal"> Tambah Jadwal Ujian</l></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Ruang</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th>Dosen Penguji</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_jadwal as $jadwal_ujian)
                                        <tr>
                                            <td>{{$jadwal_ujian->ruang}}</td>
                                            <td>{{$jadwal_ujian->tanggal}}</td>
                                            <td>{{$jadwal_ujian->jam}}</td>
                                            <td>{{$jadwal_ujian->dosen_penguji}}</td>
                                            <td>
                                                <a href="/jadwalujian/{{$jadwal_ujian->id}}/editjadwal" class="btn btn-warning btn-sm">Edit</a></td>
                                            <td>
                                                <a href="/jadwalujian/{{$jadwal_ujian->id}}/deletejadwal" class="btn btn-danger btn-sm" onclick="return confirm('Data akan dihapus?')">Hapus</a></td>
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLabel">Tambah Jadwal Ujian</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="/jadwalujian/tambahjadwal" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Ruang</label>
                        <input type="text" name="ruang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Ruangan">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                        <input type="text" name="tanggal" class="form-control" id="tanggal" aria-describedby="emailHelp" placeholder="Masukan Tanggal">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jam</label>
                        <input type="text" name="jam" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jam">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Dosen Penguji</label>
                        <input type="text" name="dosen_penguji" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Dosen">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
            </div>
        </div>
    </div>
@stop
