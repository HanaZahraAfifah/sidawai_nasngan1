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
            <h1 class="m-0">Batas Usia Pensiun Pegawai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Batas Usia Pensiun Pegawai</li>
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
               <h3>Edit Data Batas Usia Pensiun Pegawai</h3>
</div>
    </div>
    <!-- /.content -->
  </div>

  <div class = "card-body">
            <form action="{{ url('update-pensiun', $dtPensiun->id) }}" method="post">
              {{ csrf_field() }}

              <div class="form-group">
                <input type="text" id="nama_pegawai_id" name="nama_pegawai_id" class="form-control" placeholder="Nama Pegawai" value="{{ $dtPensiun->nama_pegawai_id }}">
              </div>
              
              <div class="form-group">
                <input type="text" id="nip" name="nip" class="form-control" placeholder="NIP" value="{{ $dtPensiun->nip }}">
              </div>
              
              <div class="form-group">
                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{ $dtPensiun->tgl_lahir }}">
              </div>

              <div class="form-group">
                <input type="date" id="tgl_pensiun" name="tgl_pensiun" class="form-control" placeholder="Tanggal Pensiun" value="{{ $dtPensiun->tgl_pensiun }}">
              </div>

              <div class="form-group">
                <input type="text" id="usia" name="usia" class="form-control" placeholder="Usia" value="{{ $dtPensiun->usia }}">
              </div>

              <div class="form-group">
               <button type="submit" class="btn btn-primary">Ubah Data</button> 
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