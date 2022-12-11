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
            <h1 class="m-0">Cuti Pegawai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Cuti Pegawai</li>
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
               <h3>Edit Data Cuti Pegawai</h3>
</div>
    </div>
    <!-- /.content -->
  </div>

  <div class = "card-body">
            <form action="{{ url('update-cuti', $dtCuti->id) }}" method="post">
              {{ csrf_field() }}

              <div class="form-group">
              <label for="exampleInputFile">Nama Pegawai</label>
                <select class="form-control select2" style="width: 100%;" name="nama_pegawai_id" id="nama_pegawai_id">
                <option  value="">Nama Pegawai</option>
                @foreach ($dtBiodata as $item)
                <option value="{{ $item ['id'] }}"{{ $item ['id']==$dtCuti->nama_pegawai_id ? 'selected="selected"' : '' }}>{{ $item['nama_pegawai']}}</option>
                @endforeach
              </select>
              </div>
              
              <div class="form-group">
              <label for="exampleInputFile">NIP</label>
                <input type="text" id="nip" name="nip" class="form-control" placeholder="NIP" value="{{ $dtCuti->nip }}">
              </div>

              <div class="form-group">
              <label for="exampleInputFile">Jenis Cuti</label>
                <select id="jenis_cuti" name="jenis_cuti" class="form-control" placeholder="Jenis Cuti" value="{{ $dtCuti->jenis_cuti }}">
                    <option>Jenis Cuti</option>
                    <option>Cuti Tahunan</option>
                    <option>Cuti Alasan Penting</option>
                    <option>Cuti Besar</option>
                    <option>Cuti Bersalin</option>
                    <option>Cuti Sakit</option>
                    <option>Cuti Diluar Tanggungan Negara (CTLN)</option>
                </select>
              </div>
              
              <div class="form-group">
              <label for="exampleInputFile">Tanggal Mulai</label>
                <input type="text" id="tgl_mulai" name="tgl_mulai" class="form-control" placeholder="Tanggal Mulai" value="{{ $dtCuti->tgl_mulai }}">
              </div>

              <div class="form-group">
              <label for="exampleInputFile">Tanggal Akhir</label>
                <input type="text" id="tgl_akhir" name="tgl_akhir" class="form-control" placeholder="Tanggal Akhir" value="{{ $dtCuti->tgl_akhir }}">
              </div>

              <div class="form-group">
              <label for="exampleInputFile">Lama Cuti</label>
                <input type="text" id="lama_cuti" name="lama_cuti" class="form-control" placeholder="Lama Cuti" value="{{ $dtCuti->lama_cuti }}">
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
