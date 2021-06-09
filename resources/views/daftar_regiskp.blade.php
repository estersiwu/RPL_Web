<!doctype html>
<html lang="en">

<head>
	<title>Daftar Registrasi KP | SIKP</title>
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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" >
            <div class="brand">
                <a href="/dashboardkoord"><img src="{{asset('img/tes.png')}}" alt="Logo SIKP UKDW" width="80" height="10"
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
        <div id="sidebar-nav" class="sidebar">
            <div class="sidebar-scroll">
                <nav>
                    <ul class="nav">
                        <li><a href="/dashboard-koord" class=""><i class="lnr lnr-home"></i> <span>Home</span></a></li>
                        <li><a href="" class=""><i class="lnr lnr-user"></i> <span>Koordinator</span></a></li>
                        <li><a href="/daftar-regis-kp" class="active"><i class="lnr lnr-file-empty"></i> <span>Daftar Registrasi KP</span></a></li>
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
                        <li><a href="/bataskp" class=""><i class="lnr lnr-file-empty"></i> <span>Batas Pelaksanaan KP</span></a></li>
                        </li>
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
                                <h3 class="text-center">Daftar Registrasi KP</h3>
                            </div>
                            <div class="panel-body">
                                <table id="datatable" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NIM</th>
                                            <th>Semester</th>
                                            <th>Tahun Ajaran</th>
                                            <th>Judul KP</th>
                                            <th>Alamat</th>
                                            <th>No. Telp</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_regiskp as $pengajuan_kp)
                                        <tr>
                                            <td>{{ $pengajuan_kp->nim }}</td>
                                            <td>{{ $pengajuan_kp->semester }}</td>
                                            <td>{{ $pengajuan_kp->tahun }}</td>
                                            <td>{{ $pengajuan_kp->judulkp }}</td>
                                            <td>{{ $pengajuan_kp->alamat }}</td>
                                            <td>{{ $pengajuan_kp->no_telp }}</td>
                                            <td>
                                                <a href="/daftar-regis-kp/{{$pengajuan_kp->id}}/editregis" class="btn btn-warning btn-sm">Edit</a></td>
                                            <td>
                                                <a href="/daftar-regis-kp/{{$pengajuan_kp->id}}/deletejadwal" class="btn btn-danger btn-sm" onclick="return confirm('Data akan dihapus?')">Hapus</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h2 class="modal-title" id="exampleModalLabel">Verifikasi Pra KP</h2>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/datapengajuanketerangankp" method="POST" id="deleteForm">
                                            {{csrf_field()}}
                                            {{ method_field('DITERIMA') }}

                                            <input type="hidden" name="_method" value="DITERIMA">
                                            <p> Silahkan Lakukan Verifikasi...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary delete">DITERIMA</button>
                                            <button type="submit" class="btn btn-danger deelete">DITOLAK</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<script src="{{asset('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('admin/assets/scripts/klorofil-common.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var table = $('#datatable').DataTable();

        table.on('click', '.diterima', function () {
            $tr =$(this).closest('tr');
            if ($($tr).hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).$data();
            console.log(data);

            //$('#id').val(data[0]);

            $('#deleteForm').attr('action', '/daftar-regis-kp'+data[0]);
            $('#deleteModal').modal('show');
        });
    });
</script>
</body>

</html>
