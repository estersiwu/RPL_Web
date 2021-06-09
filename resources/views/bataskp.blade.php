<!doctype html>
<html lang="en">

<head>
    <title>Batas Pelaksanaan KP | SIKP</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/linearicons/style.css')}}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
    <!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" sizes="120x120" href="{{asset('img/SI.png')}}">
</head>

<body>
    <!-- WRAPPER -->
    <div id="wrapper">
        <!-- NAVBAR -->
        <nav class="navbar navbar-default navbar-fixed-top" >
            <div class="brand">
                <a href="/dashboard-koord"><img src="{{asset('img/tes.png')}}" alt="Logo SIKP UKDW" width="80" height="10"
                class="img-responsive logo"></a>
            </div>
            <div class="container-fluid">
                <div class="navbar-btn">
                    <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
                </div>
                <form class="navbar-form navbar-left">
                    <div class="input-group">
                        <input type="text" value="" class="form-control" placeholder="Pencarian...">
                        <span class="input-group-btn"><button type="button" class="btn btn-primary">Cari</button></span>
                    </div>
                </form>
                <div id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
                                <i class="lnr lnr-alarm"></i>
                                <span class="badge bg-danger">3</span>
                            </a>
                            <ul class="dropdown-menu notifications">
                                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Pengajuan Diterima</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-danger"></span>Menunggu Verifikasi</a></li>
                                <li><a href="#" class="notification-item"><span class="dot bg-success"></span>Pengajuan Terkirim</a></li>
                                <li><a href="#" class="more">Lihat semua notifikasi</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END NAVBAR -->
        <!-- LEFT SIDEBAR -->
        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li><a href="/dashboard-koord" class=""><i class="lnr lnr-home"></i> <span>Home</span></a></li>
                        <li><a href="" class=""><i class="lnr lnr-user"></i> <span>Koordinator</span></a></li>
                        <li><a href="/daftar-regis-kp" class=""><i class="lnr lnr-file-empty"></i> <span>Daftar Registrasi KP</span></a></li>
                        <li><a href="/jadwalujian" class=""><i class="lnr lnr-file-empty"></i> <span>Jadwal Ujian</span></a></li>
                        <li>
                            <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-list"></i> <span>Data Pengajuan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subPages" class="collapse ">
                                <ul class="nav">
                                    <li><a href="/datapengajuanketerangankp" class=""><i class="lnr lnr-file-empty"></i> <span>Surat Keterangan KP</span></a></li>
                                    <li><a href="/datapengajuan-prakp" class=""><i class="lnr lnr-file-empty"></i> <span>Pra KP</span></a></li>
                                    <li><a href="/datapengajuan-kp" class=""><i class="lnr lnr-file-empty"></i> <span>KP</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="/bataskp" class="active"><i class="lnr lnr-file-empty"></i> <span>Batas Pelaksanaan KP</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- END LEFT SIDEBAR -->
        <!-- MAIN -->
        <div class="main">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            @if ($bataskp = Session::get('sukses'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $bataskp }}</strong>
                                    </div>
                                    @endif
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="text-center">Waktu Periode KP</h3>
                                    <div class="right">
                                        <button type="button" class="btn"><l class="lnr lnr-select" data-toggle="modal" data-target="#exampleModal"> Set Batas Pelaksanaan KP</l></button>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>NIM</th>
                                                <th width="20%">Tanggal Mulai</th>
                                                <th>Tanggal Selesai</th>
                                                <th width="1%">Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data_bataskp as $bataskp)
                                            <tr>
                                                <td>{{$bataskp->nim}}</td>
                                                <td>{{$bataskp->tanggal_mulai}}</td>
                                                <td>{{$bataskp->tanggal_selesai}}</td>
                                                <td>
                                                    <a href="/bataskp/{{$bataskp->id}}/edit-bataskp" class="btn btn-warning btn-sm">Edit</a></td>
                                                <td>
                                                    <a href="/bataskp/{{$bataskp->id}}/delete-bataskp" class="btn btn-danger btn-sm" onclick="return confirm('Data akan dihapus?')">Hapus</a></td>
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
                <h2 class="modal-title" id="exampleModalLabel">Set Batas Pelaksanaan KP</h2>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="/bataskp/set-bataskp" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="" class="label-control">NIM</label>
                            <input name="nim" type="text" class="form-control" placeholder="Masukkan NIM">
                            @if($errors->has('nim'))
                            <div class="text-danger">
                                {{ $errors->first('nim')}}
                            </div>
                        @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Mulai</label>
                            <input type="date" name="tanggal_mulai" class="form-control" id="tanggal_mulai" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Tanggal Selesai</label>
                            <input type="date" name="tanggal_selesai" class="form-control" id="tanggal_selesai" aria-describedby="emailHelp">
                        </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
</body>
