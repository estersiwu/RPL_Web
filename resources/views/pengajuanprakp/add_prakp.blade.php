
<!doctype html>
<html lang="en">

<head>
	<title>Dashboard | SIKP UKDW</title>
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
                        <li><a href="/home" class=""><i class="lnr lnr-home"></i> <span>Home</span></a></li>
						<li><a href="/mahasiswa" class=""><i class="lnr lnr-user"></i> <span>Mahasiswa</span></a></li>
                        <li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-list"></i> <span>Pengajuan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="/pengajuanketerangankp" class="">Surat Keterangan KP</a></li>
									<li><a href="/pengajuanprakp" class="active">Pra KP</a></li>
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
                            <div class="panel">
                                <div class="panel-heading">
                                <title>Form Surat Keterangan KP</title>
                            <body>
                            <form action="/pengajuanketerangankp/tambah" method="POST">
                                {{csrf_field()}}
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-6">
                                    <h1 align="center">Pra KP</h1>
                                        <div class="form-group">
                                            <label for="semester">Semester</label>
                                            <select name="semester" id="semester" class="form-control">
                                                <option selected disabled>--Pilih Semester--</option>
                                                <option value="Genap">Genap</option>
                                                <option value="Gasal">Gasal</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tahun">Tahun Ajaran</label>
                                            <select name="tahun" id="tahun" class="form-control">
                                                <option selected disabled>--Pilih Tahun Ajaran--</option>
                                                <option value="2020/2021">2020/2021</option>
                                                <option value="2021/2022">2021/2022</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="label-control">Status Pra KP</label>
                                            <input type="text" name="status_prakp" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="label-control">NIM</label>
                                            <input type="text" name="nim" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="label-control">NIK</label>
                                            <input type="text" name="nik" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="label-control">Tools</label>
                                            <input type="text" name="tools" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="label-control">Spesifikasi</label>
                                            <input type="text" name="spesifikasi" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="label-control">Dokumen</label>
                                            <input type="file" class="form-control" aria-label="dokumen" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="label-control">Penguji</label>
                                            <input type="text" name="penguji" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="label-control">Ruang</label>
                                            <input type="text" name="ruang" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="label-control">Lembaga</label>
                                            <input type="text" name="lembaga" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="label-control">Pimpinan</label>
                                            <input type="text" name="pimpinan" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="label-control">Alamat</label>
                                            <textarea type="text" name="alamat" class="form-control" cols="30" rows="4"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="label-control">No. Telp</label>
                                            <input type="text" name="no_telp" class="form-control">
                                        </div>
                                        {{csrf_field()}}
                                        <input type="submit" value="Submit" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </body>
			<!-- MAIN CONTENT -->
								<!-- END TABBED CONTENT -->
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
</body>

</html>
