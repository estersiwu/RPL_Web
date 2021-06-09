<!doctype html>
<html lang="en">

<head>
	<title>Daftar Bimbingan | SIKP</title>
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
						<li><a href="/dashboard-dosen" class=""><i class="lnr lnr-user"></i> <span>Dosen</span></a></li>
                        <li><a href="/daftarbimbingan" class="active"><i class="lnr lnr-file-empty"></i> <span>Daftar Bimbingan</span></a></li>
                        <li><a href="/lihatjadwal" class=""><i class="lnr lnr-file-empty"></i> <span>Jadwal Ujian</span></a></li>
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
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="text-center">DAFTAR BIMBINGAN</h3>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>NIM</th>
                                                <th>Judul KP</th>
                                                <th>Lembaga</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($daftar_bimbingan as $daftar_bimbingan)
                                            <tr>

                                                <td>{{$daftar_bimbingan->form_ketkp->nim}}</td>
                                                <td>{{$daftar_bimbingan->form_ketkp->judul}}</td>
                                                <td>{{$daftar_bimbingan->form_ketkp->lembaga}}</td>
                                                <td>
                                                    <a href="/jadwalujian/{{$jadwal_ujian->id}}/editjadwal" class="btn btn-warning btn-sm">Set Pengajuan Ujian KP</a></td>
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
                <h2 class="modal-title" id="exampleModalLabel">Set Pengajuan Ujian KP</h2>
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

	<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
</body>
