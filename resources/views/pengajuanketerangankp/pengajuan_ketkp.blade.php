<!doctype html>
<html lang="en">

<head>
	<title>Pengajuan Surat Keterangan KP | SIKP</title>
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
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="brand">
                <a href="/home"><img src="{{asset('img/tes.png')}}" alt="Logo SIKP UKDW" width="80" height="10"
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
                        <li><a href="/home" class=""><i class="lnr lnr-home"></i> <span>Home</span></a></li>
                        <li><a href="/mahasiswa" class=""><i class="lnr lnr-user"></i> <span>Mahasiswa</span></a></li>
                        <li>
                            <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-list"></i> <span>Pengajuan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subPages" class="collapse ">
                                <ul class="nav">
                                    <li><a href="/pengajuanketerangankp" class="active">Surat Keterangan KP</a></li>
                                    <li><a href="/pengajuanprakp" class="">Pra KP</a></li>
                                    <li><a href="/pengajuankp" class="">KP</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="notifications.html" class=""><i class="lnr lnr-alarm"></i> <span>Pemberitahuan</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="main">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-12">
                                @if ($pengajuanketkp = Session::get('sukses'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{$pengajuanketkp}}</strong>
                                    </div>
                                    @endif
                            <div class="panel">
                                <div class="panel-heading">
                                    <title>Form Surat Keterangan KP</title>
                                <body>
                                <form action="{{ route('pengajuanketkp.store') }}" method="POST">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-7">
                                        <h1 align="center">Surat Keterangan KP</h1>
                                        <div class="form-group">
                                            <label for="semester">Semester *</label>
                                            <select name="semester" id="semester" class="form-control">
                                                <option selected disabled>--Pilih Semester--</option>
                                                <option value="Genap">Genap</option>
                                                <option value="Gasal">Gasal</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tahun">Tahun Ajaran *</label>
                                            <select name="tahun" id="tahun" class="form-control">
                                                <option selected disabled>--Pilih Tahun Ajaran--</option>
                                                <option value="2020/2021">2020/2021</option>
                                                <option value="2021/2022">2021/2022</option>
                                            </select>
                                        </div>
                                            <div class="form-group">
                                                <label for="" class="label-control">NIM *</label>
                                                <input name="nim" type="text" class="form-control" placeholder="Masukkan NIM">
                                                @if($errors->has('nim'))
                                                <div class="text-danger">
                                                    {{ $errors->first('nim')}}
                                                </div>
                                            @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="label-control">Lembaga *</label>
                                                <input name="lembaga" type="text" class="form-control" placeholder="Masukkan Lembaga">
                                                @if($errors->has('lembaga'))
                                                <div class="text-danger">
                                                    {{ $errors->first('lembaga')}}
                                                </div>
                                            @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="label-control">Pimpinan *</label>
                                                <input name="pimpinan" type="text" class="form-control" placeholder="Masukkan Pimpinan">
                                                @if($errors->has('pimpinan'))
                                                <div class="text-danger">
                                                    {{ $errors->first('pimpinan')}}
                                                </div>
                                            @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="label-control">No. Telp *</label>
                                                <input name="no_telp" type="text" class="form-control" placeholder="Masukkan No.Telp">
                                                @if($errors->has('no_telp'))
                                                <div class="text-danger">
                                                    {{ $errors->first('no_telp')}}
                                                </div>
                                            @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="label-control">Alamat *</label>
                                                <textarea type="text" name="alamat" class="form-control" cols="30" rows="4" placeholder="Masukkan Alamat"></textarea>
                                                @if($errors->has('alamat'))
                                                <div class="text-danger">
                                                    {{ $errors->first('alamat')}}
                                                </div>
                                            @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="" class="label-control">Fax *</label>
                                                <input name="fax" type="text" class="form-control" placeholder="Masukkan Fax">
                                                @if($errors->has('fax'))
                                                <div class="text-danger">
                                                    {{ $errors->first('fax')}}
                                                </div>
                                            @endif
                                            </div>
                                            <div class="form-group">
                                                <label for="formFile" class="form-label">Dokumen</label>
                                                <input class="form-control" name="dokumen" type="file" id="formFile">
                                              </div>
                                              <div class="form-group">
                                                <input type="submit" value="Submit" class="btn btn-primary">
                                        </div>
                                    </div>
                                </form>
                            </body>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- Javascript -->
    <script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
</body>

</html>

