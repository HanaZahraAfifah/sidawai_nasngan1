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
            <h1 class="m-0">Jenis Jabatan</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create Jenis Jabatan</li>
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
               <h3>Create Jenis Jabatan</h3>


  <div class = "card-body">
            <form action="{{ route('simpan-jenjab') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="form-group">
                <select id="jenis_jabatan" name="jenis_jabatan" class="form-control" placeholder="Jenis Jabatan">
                    <option>Jenis Jabatan</option>
                    <option>Struktural</option>
                    <option>Fungsional</option>
                    <option>Pelaksana</option>
                    <option>Non ASN</option>
              </select>
              </div>
              
              <div class="form-group">
               <button type="submit" class="btn btn-success">Simpan Data</button> 
              </div>
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
