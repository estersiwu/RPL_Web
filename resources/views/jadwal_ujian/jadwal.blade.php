<!doctype html>
<html lang="en">

<head>
    <title>Jadwal Ujian | SIKP</title>
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
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">-</a></li>
                                <li><a href="#">-</a></li>
                                <li><a href="#">-</a></li>
                                <li><a href="#">-</a></li>
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
                        
                        <!-- <li>
                            <a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
                        </li> -->
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
                    <li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Home</span></a></li>
                        <li><a href="/koordinator" class=""><i class="lnr lnr-user"></i> <span>Koordinator</span></a></li>
                        <li><a href="/daftarregiskp" class=""><i class="lnr lnr-file-empty"></i> <span>Daftar Registrasi KP</span></a></li>
                        <li><a href="/jadwalujian" class=""><i class="lnr lnr-file-empty"></i> <span>Jadwal Ujian</span></a></li>
                        <li>
                            <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-list"></i> <span>Data Pengajuan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                            <div id="subPages" class="collapse ">
                                <ul class="nav">
                                    <li><a href="/datapengajuanketerangankp" class="">Surat Keterangan KP</a></li>
                                    <li><a href="/datapengajuanprakp" class="">Pra KP</a></li>
                                    <li><a href="/datapengajuankp" class="">KP</a></li>
                                </ul>
                        </div>
                </nav>
            </div>
        </div>
        <div class="main">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h2 class="panel-title">Data Jadwal Ujian</h2>
                                    <div class="right">
                                        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <tr>
                                        <th>Ruang</th>
                                        <th>Tanggal</th>
                                        <th>Jam</th>
                                        <th>Dosen Penguji</th>
                                    </tr>
                                    @foreach($data_jadwal as $jadwal_ujian)
                                    <tr>
                                        <td>{{$jadwal_ujian->ruang}}</td>
                                        <td>{{$jadwal_ujian->tanggal}}</td>
                                        <td>{{$jadwal_ujian->jam}}</td>
                                        <td>{{$jadwal_ujian->dosen_penguji}}</td>
                                    </tr>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                  <!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tambah Jadwal Ujian</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<form action="/jadwalujian/create" method="POST">
										<div class="mb-3">
											<label for="exampleInputEmail1" class="form-label">Ruang</label>
											<input type="text" name="ruang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Ruangan">
										</div>
										<div class="mb-3">
											<label for="exampleInputEmail1" class="form-label">Tanggal</label>
											<input type="text" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Tanggal">
										</div>
										<div class="mb-3">
											<label for="exampleInputEmail1" class="form-label">Jam</label>
											<input type="text" name="jam" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Jam">
										</div>
										<div class="mb-3">
											<label for="exampleInputEmail1" class="form-label">Dosen Penguji</label>
											<input type="text" name="dosen_penguji" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan Nama Dosen Penguji">
										</div>
										
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary">Submit</button>
									</div>
								</form>
                            </div>
                        </div>
                    </div>
                </div>
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


