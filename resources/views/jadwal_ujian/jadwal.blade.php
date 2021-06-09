@extends('layouts.master_jadwal')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @if ($jadwalujian = Session::get('sukses'))
                                <div class="alert alert-success alert-block">
                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                    <strong>{{ $jadwalujian }}</strong>
                                </div>
                                @endif
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="text-center">JADWAL UJIAN</h3>
                                <div class="right">
                                    <button type="button" class="btn"><l class="lnr lnr-plus-circle" data-toggle="modal" data-target="#exampleModal"> Tambah Jadwal Ujian</l></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>NIM</th>
                                            <th>Ruang</th>
                                            <th>Tanggal</th>
                                            <th>Jam</th>
                                            <th width="45%">Dosen Penguji</th>
                                            <th width="1%">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @foreach ($data_jadwal as $jadwal_ujian)
                                            <tr>
                                                <td>{{$jadwal_ujian->nim}}</td>
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
                        <label for="exampleInputEmail1" class="form-label">NIM</label>
                        <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NIM">
                    </div>
                    <div class="form-check">
                        <label for="exampleInputEmail1" class="form-label">Ruang</label>
                            <br><input class="form-check-input" type="radio" name="ruang" id="ruang" value="D.1.1">
                            <label class="form-check-label" for="exampleRadios1">
                                D.1.1
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ruang" id="ruang" value="D.1.2">
                                <label class="form-check-label" for="exampleRadios3">
                                    D.1.2
                                </label>
                            </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ruang" id="ruang" value="C.3.7">
                                <label class="form-check-label" for="exampleRadios2">
                                    C.3.7
                                </label>
                            </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="ruang" id="ruang" value="B.2.4">
                                <label class="form-check-label" for="exampleRadios3">
                                    B.2.4
                                </label>
                            </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal" aria-describedby="emailHelp">
                    </div>
                    <div class="form-check">
                        <label for="exampleInputEmail1" class="form-label">Jam</label>
                            <br><input class="form-check-input" type="radio" name="jam" id="jam" value="08:00">
                            <label class="form-check-label" for="exampleRadios1">
                                08:00
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jam" id="jam" value="09:00">
                                <label class="form-check-label" for="exampleRadios2">
                                    09:00
                                </label>
                            </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jam" id="jam" value="09:00">
                                <label class="form-check-label" for="exampleRadios3">
                                    10:00
                                </label>
                            </div>
                    <div class="form-check">
                        <label class="form-check-label" for="defaultCheck1" >Dosen Penguji</label>
                        <br><input class="form-check-input" type="checkbox" name="dosen_penguji[]" value="Argo Wibowo, S.T., M.T.," id="dosen_penguji">
                            <label class="form-check-label" for="defaultCheck1">
                                Argo Wibowo, S.T., M.T.
                            </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="dosen_penguji[]" value="Andhika Galuh Prabawati, S.Kom., M.Kom.,">
                            <label class="form-check-label" for="defaultCheck1">
                                Andhika Galuh Prabawati, S.Kom., M.Kom.
                            </label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="dosen_penguji[]" value="Yetli Oslan, S.Kom, M.T.">
                            <label class="form-check-label" for="defaultCheck1">
                                Yetli Oslan, S.Kom, M.T.
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dosen_penguji[]" value="Drs. Jong Jek Siang, M.Sc.">
                                <label class="form-check-label" for="defaultCheck1">
                                    Drs. Jong Jek Siang, M.Sc.
                                </label>
                            </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="dosen_penguji[]" value="Umi Proboyekti, S.Kom, M.LIS.">
                                <label class="form-check-label" for="defaultCheck1">
                                    Umi Proboyekti, S.Kom, M.LIS.
                                </label>
                            </div>
                        </br>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
