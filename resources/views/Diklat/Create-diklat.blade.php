<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
<title>AdminLTE 3 | Starter</title>
    @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<audio hidden autoplay loop>
             <source src="{{ asset('AdminLte/dist/img/Lagu_Daerah_Kalimantan_Timur_Sungai_Mahakam_Cipt._Drs._Roesdibyono.mp3')}}" type="audio/mpeg">
        </audio>
<div class="wrapper">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 
  @include('Template.left-sidebar')


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Diklat Pegawai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create Diklat Pegawai</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class = "card card-info card-outline">
            <div class = "card-header">
               <h3>Create Diklat Pegawai</h3>

  <div class = "card-body">
            <form action="{{ route('simpan-diklat') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="form-group">
                <select class="form-control select2" style="width: 100%;" name="nama_pegawai_id" id="nama_pegawai_id">
                <option disable value="">Nama Pegawai</option>
                @foreach ($dtBiodata as $item)
                <option value="{{ $item->id }}">{{ $item->nama_pegawai}}</option>
                @endforeach
              </select>
              </div>
              
              <div class="form-group">
                <input type="text" id="nip" name="nip" class="form-control" placeholder="NIP">
              </div>

              <div class="form-group">
              <select id="jenis_diklat" name="jenis_diklat" class="form-control" placeholder="Jenis Diklat">
                    <option>Jenis Diklat</option>
                    <option>Diklat Struktural</option>
                    <option>Diklat Fungsional</option>
              </select>              
            </div>
              
              <div class="form-group">
                <input type="text" id="juklak_diklat" name="juklak_diklat" class="form-control" placeholder="Juklak Diklat">
              </div>

              <div class="form-group">
                <input type="text" id="tempat" name="tempat" class="form-control" placeholder="Tempat">
              </div>

              <div class="form-group">
                <input type="text" id="penyelenggara" name="penyelenggara" class="form-control" placeholder="Penyelenggara">
              </div>

              <div class="form-group">
                <input type="text" id="jam_terlaksana" name="jam_terlaksana" class="form-control" placeholder="Jam Terlaksana">
              </div>

              <div class="form-group">
                <input type="text" id="no_sertifikat" name="no_sertifikat" class="form-control" placeholder="No Sertifikat">
              </div>

              <div class="form-group">
               <button type="submit" class="btn btn-success">Simpan Data</button> 
              </div>
              </div>
              </div>
              </div>
              </div>

              <div class="card-footer">          
</div>
    </div>
    <!-- /.content -->
  </div>

    </div>
</div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
 @include('Template.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('Template.script')
</body>
</html>
