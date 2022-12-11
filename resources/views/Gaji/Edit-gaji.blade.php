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
             <source src="{{ asset('AdminLte/dist/img/Buah_Bolok.mp3')}}" type="audio/mpeg">
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
            <h1 class="m-0">Kenaikan Gaji Berkala</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kenaikan Gaji Berkala</li>
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
               <h3>Edit Data Kenaikan Gaji Berkala</h3>
</div>
    </div>
    <!-- /.content -->
  </div>

  <div class = "card-body">
            <form action="{{ url('update-gaji', $dtGaji->id) }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="form-group">
              <label for="exampleInputFile">Nama Pegawai</label>
                <select class="form-control select2" style="width: 100%;" name="nama_pegawai_id" id="nama_pegawai_id">
                <option  value="">Nama Pegawai</option>
                @foreach ($dtBiodata as $item)
                <option value="{{ $item ['id'] }}"{{ $item ['id']==$dtGaji->nama_pegawai_id ? 'selected="selected"' : '' }}>{{ $item['nama_pegawai']}}</option>
                @endforeach
              </select>
              </div>
              
              <div class="form-group">
              <label for="exampleInputFile">NIP</label>
                <input type="text" id="nip" name="nip" class="form-control" placeholder="NIP" value="{{ $dtGaji->nip }}">
              </div>

              <div class="form-group">
              <label for="exampleInputFile">Terhitung Mulai Tanggal</label>
                <select id="tmt" name="tmt" class="form-control" placeholder="Terhitung Mulai Tanggal" value="{{ $dtGaji->tmt }}">
                    <option>Terhitung Mulai Tanggal</option>
                    <option>Ganjil</option>
                    <option>Genap</option>
                </select>
              </div>

              <div class="form-group">
              <label for="exampleInputFile">Bulan</label>
                <input type="text" id="bulan" name="bulan" class="form-control" placeholder="Bulan" value="{{ $dtGaji->bulan }}">
              </div>

              <div class="form-group">
              <label for="exampleInputFile">Tahun</label>
                <input type="text" id="tahun" name="tahun" class="form-control" placeholder="Tahun" value="{{ $dtGaji->tahun }}">
              </div>

              <div class="form-group">
              <label for="exampleInputFile">SK KGB</label>
                <input type="file" id="sk_kgb" name="sk_kgb" class="form-control" placeholder="SK KGB" value="{{ $dtGaji->sk_kgb }}">
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
