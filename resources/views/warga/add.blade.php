<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!doctype html>
<html lang="en">
<!--{{ asset('Dashboard/') }} -->

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('Dashboard/./assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('Dashboard/./assets/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Admin Sistem Informasi Desa
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ asset('Dashboard/./assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('Dashboard/./assets/css/paper-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('Dashboard/./assets/demo/demo.css') }}" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">

                <a href="https://www.creative-tim.com" class="simple-text logo-normal">
                    Sistem Informasi Desa

                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="active ">
                        <a href="">
                            <i class="nc-icon nc-bank"></i>
                            <p>Input Data Warga</p>
                        </a>
                    </li>
                    <li>
                        <a href="surat">
                            <i class="nc-icon nc-bank"></i>
                            <p>Surat Keterangan</p>
                        </a>
                    </li>
                    <li>
                        <a href="mus">
                            <i class="nc-icon nc-bank"></i>
                            <p>Musrenbang</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel" style="height: 200vh;">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="navbar-brand" href="javascript:;">Admin</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="nc-icon nc-zoom-split"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="description">Input Data Warga</h3>
                    </div>

                    <form action="/warga/store" method="POST">
                        @csrf
                        <input type="text" name="nama" class="form-control" placeholder="Nama"><br>
                        <input type="text" name="nik" class="form-control" placeholder="nik"><br>
                        <input type="text" name="nokk" class="form-control" placeholder="nokk"><br>
                        <input type="text" name="alamat" class="form-control" placeholder="alamat"><br>
                        <input type="text" name="url" class="form-control" placeholder="alamat"><br>
                        <input type="text" name="agama" class="form-control" placeholder="alamat"><br>
                        <input type="text" name="jk" class="form-control" placeholder="alamat"><br>
                        <input type="text" name="status_ktp" class="form-control" placeholder="alamat"><br>
                        <input type="text" name="pekerjaan" class="form-control" placeholder="alamat"><br>
                        <input type="text" name="nobpjs" class="form-control" placeholder="alamat"><br>
                        <input type="text" name="npwp" class="form-control" placeholder="alamat"><br>
                        <input type="text" name="status_menetap" class="form-control" placeholder="alamat"><br>
                        <input type="text" name="status_perkawinan" class="form-control" placeholder="alamat"><br>
                        <fieldset class="form-group">
                            <div class="row">
                                <legend class="col-form-label col-sm-2 pt-0">Jenis Surat Keterangan</legend>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jk" id="gridRadios1" value="option1">
                                        <label class="form-check-label" for="gridRadios1">
                                            Laki Laki
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jk" id="gridRadios1" value="option1">
                                        <label class="form-check-label" for="gridRadios1">
                                            Perempuan
                                        </label>
                                    </div>

                                    <input type="submit" name="submit" value="save">

                    </form>

                </div>
            </div>
            <footer class=" footer" style="position: absolute; bottom: 50; width: -webkit-fill-available;">
                <div class="container-fluid">
                    <div class="row">

                        <div class="credits ml-auto">
                            <span class="copyright">
                                © 2022, Sistem Informasi Desa</i>
                            </span>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('Dashboard/./assets/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('Dashboard/./assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('Dashboard/./assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Dashboard/./assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <script src="{{ asset('Dashboard/https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('Dashboard/./assets/js/plugins/chartjs.min.js') }}"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('Dashboard//assets/js/plugins/bootstrap-notify.js') }}."></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('Dashboard/./assets/js/paper-dashboard.min.js?v=2.0.1') }}" type="text/javascript"></script>
</body>

</html>