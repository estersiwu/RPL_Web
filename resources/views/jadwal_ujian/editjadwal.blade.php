@extends('layouts.master_jadwal')

@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="text-center">Edit Jadwal Ujian</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/jadwalujian/{{$jadwalujian->id}}/updatejadwal" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">NIM</label>
                                    <input type="text" name="nim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NIM" value="{{$jadwalujian->nim}}">
                                </div>
                                <div class="form-check">
                                    <label for="exampleInputEmail1" class="form-label">Ruang</label>
                                        <br><input class="form-check-input" type="radio" name="ruang" id="ruang" value="D.1.1" {{$jadwalujian->ruang == 'D.1.1'? 'checked' : ''}}>
                                        <label class="form-check-label" for="exampleRadios1">
                                            D.1.1
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="ruang" id="ruang" value="D.1.2" {{$jadwalujian->ruang == 'D.1.2'? 'checked' : ''}}>
                                            <label class="form-check-label" for="exampleRadios3">
                                                D.1.2
                                            </label>
                                        </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="ruang" id="ruang" value="C.3.7" {{$jadwalujian->ruang == 'C.3.7'? 'checked' : ''}}>
                                            <label class="form-check-label" for="exampleRadios2">
                                                C.3.7
                                            </label>
                                        </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="ruang" id="ruang" value="B.2.4" {{$jadwalujian->ruang == 'B.2.4'? 'checked' : ''}}>
                                            <label class="form-check-label" for="exampleRadios3">
                                                B.2.4
                                            </label>
                                        </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" id="tanggal" aria-describedby="emailHelp" value="{{$jadwalujian->tanggal}}">
                                </div>
                                <div class="form-check">
                                    <label for="exampleInputEmail1" class="form-label">Jam</label>
                                        <br><input class="form-check-input" type="radio" name="jam" id="jam" value="08:00" {{$jadwalujian->jam == '08:00'? 'checked' : ''}}>
                                        <label class="form-check-label" for="exampleRadios1">
                                            08:00
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jam" id="jam" value="09:00" {{$jadwalujian->jam == '09:00'? 'checked' : ''}}>
                                            <label class="form-check-label" for="exampleRadios2">
                                                09:00
                                            </label>
                                        </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jam" id="jam" value="10:00" {{$jadwalujian->jam == '10:00'? 'checked' : ''}}>
                                            <label class="form-check-label" for="exampleRadios3">
                                                10:00
                                            </label>
                                        </div>
                                <div class="form-check">
                                    <label class="form-check-label" for="defaultCheck1" >Dosen Penguji</label>
                                    <div class="checkbox">
                                        <label>
                                        <input type="checkbox" name="dosen_penguji[]"  value="Argo Wibowo, S.T., M.T." {{ (is_array(old('dosen_penguji')) && in_array('Argo Wibowo, S.T., M.T.', old('dosen_penguji'))) ? ' checked' : '' }}>Argo Wibowo, S.T., M.T.
                                       </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                        <input type="checkbox" name="dosen_penguji[]"  value="Andhika Galuh Prabawati, S.Kom., M.Kom." {{ (is_array(old('dosen_penguji')) && in_array('Andhika Galuh Prabawati, S.Kom., M.Kom.', old('dosen_penguji'))) ? ' checked' : '' }}>Andhika Galuh Prabawati, S.Kom., M.Kom.
                                       </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                        <input type="checkbox" name="dosen_penguji[]"  value="Yetli Oslan, S.Kom, M.T." {{ (is_array(old('dosen_penguji')) && in_array('Yetli Oslan, S.Kom, M.T.', old('dosen_penguji'))) ? ' checked' : '' }}>Yetli Oslan, S.Kom, M.T.
                                       </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                        <input type="checkbox" name="dosen_penguji[]"  value="Drs. Jong Jek Siang, M.Sc." {{ (is_array(old('dosen_penguji')) && in_array('Drs. Jong Jek Siang, M.Sc.', old('dosen_penguji'))) ? ' checked' : '' }}>Drs. Jong Jek Siang, M.Sc.
                                       </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                        <input type="checkbox" name="dosen_penguji[]"  value="Umi Proboyekti, S.Kom, M.LIS." {{ (is_array(old('dosen_penguji')) && in_array('Umi Proboyekti, S.Kom, M.LIS.', old('dosen_penguji'))) ? ' checked' : '' }}>Umi Proboyekti, S.Kom, M.LIS.
                                       </label>
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


