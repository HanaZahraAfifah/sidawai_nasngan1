<nav class="main-header navbar navbar-expand navbar-yellow navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"> <font color="black"><i class="fas fa-bars"></font></i></a>
      </li>
     <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('home') }}" class="nav-link"><font color="black">Beranda</font></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link"><font color="black">Sistem Informasi Data Pegawai Dinas Pangan, Tanaman Pangan dan Hortikultura</font></a>
      </li>
    </ul>
    <head>
      <style media="screen">
        body{
          background-color: #7E670B;
        }
        </style>
        </head>

   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

   


<!-- Start kode untuk form pencarian -->
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


    </ul>
  </nav>