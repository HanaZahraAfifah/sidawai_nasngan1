<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIDAWAI NASNGAN | @yield('title')</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('adminLte/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('adminLte/dist/css/adminlte.min.css?v=3.2.0') }}">
    @yield('css')
</head>

<body class="hold-transition sidebar-mini">
    <audio hidden autoplay loop>
        <source src="{{ asset('AdminLte/dist/img/The_Heart_of_Borneo_Song.mp3')}}" type="audio/mpeg">
    </audio>
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-yellow navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('home') }}" class="nav-link">Beranda</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">
                        <font color="black">Sistem Informasi Data Pegawai Dinas Pangan, Tanaman Pangan dan Hortikultura
                        </font>
                    </a>
                </li>
            </ul>

            <head>
                <style media="screen">
                    body {
                        background-color: #7E670B;
                    }

                </style>
            </head>

            <ul class="navbar-nav ml-auto">
                

                <!-- Start kode untuk form pencarian -->
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-green-primary elevation-4">
            <a href="" class="brand-link">
                <img src="{{ asset('AdminLte/dist/img/kuning-removebg-preview.png')}}" height="100" width="95">
                <font color="white">
                    <span class="brand-text font-weight-light">Sidawai Nasngan</span>
                </font>
            </a>

            <head>
                <style media="screen">
                    body {
                        background-color: #6A2929;
                    }

                </style>
            </head>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <i class="fas fa-solid fa-user-tie"></i>
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">
                            <font color="yellow">{{ Auth::user()->name }} <br><i class="fa fa-circle text-success"></i> Online</font>
                        </a>
                    </div>
                </div>
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        @if(Auth::user()->level == 'admin')
                        <li class="nav-item ">
                            <a href="{{ route('data-jenjab') }}" class="nav-link ">
                                <i class="fa fa-bars"></i>
                                <p>
                                    <font color="white">
                                        Jenis Jabatan
                                        <i class=""></i>
                                    </font>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item ">
                            <a href="{{ route('data-jabatan') }}" class="nav-link ">
                                <i class="fa fa-th-list"></i>
                                <p>
                                    <font color="white">
                                        Nama Jabatan
                                        <i class=""></i>
                                    </font>
                                </p>
                            </a>
                        </li>
                        @endif
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link ">
                                <i class="fas fa-home"></i>
                                <p>
                                    <font color="white">Dashboard</font>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('data-biodata') }}" class="nav-link ">
                                <i class="fa fa-address-card"></i>
                                <p>
                                    <font color="white">
                                        Biodata Pegawai
                                        <i class=""></i>
                                    </font>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('data-diklat') }}" class="nav-link ">
                                <i class="fa fa-file"></i>
                                <p>
                                    <font color="white">
                                        Diklat Pegawai
                                        <i class=""></i>
                                    </font>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('data-gaji') }}" class="nav-link ">
                                <i class="fas fa-chart-line"></i>
                                <p>
                                    <font color="white">
                                        Kenaikan Gaji Berkala
                                        <i class=""></i>
                                    </font>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a href="{{ route('data-cuti') }}" class="nav-link ">
                                <i class="fa fa-calendar"></i>
                                <p>
                                    <font color="white">
                                        Data Cuti Pegawai
                                        <i class=""></i>
                                    </font>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i> <p><font color="white">Logout</font></p></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            @yield('content')
        </div>

        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                Sidawai Nasngan
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2022 <a href="https://dispertan.kaltimprov.go.id">Dinas Pangan, Tanaman Pangan dan Hortikultura
                Prov. Kaltim</a>.</strong> All rights reserved.
        </footer>
        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>
    <script src="{{ asset('adminLte/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('adminLte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('adminLte/dist/js/adminlte.min.js?v=3.2.0') }}"></script>
    @yield('js')
</body>

</html>
