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
             <source src="{{ asset('AdminLte/dist/img/The_Heart_of_Borneo_Song.mp3')}}" type="audio/mpeg">
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
            <h1 class="m-0">Biodata Pegawai</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item active">Create Biodata Pegawai</li>
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
               <h3>Create Biodata Pegawai</h3>

  <div class = "card-body">
            <form action="{{ route('simpan-biodata') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              
              <div class="form-group">
                <input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control" placeholder="Nama Pegawai">
              </div>

              <div class="form-group">
                <input type="text" id="nip" name="nip" class="form-control" placeholder="NIP">
              </div>

              <div class="form-group">
                <input type="text" id="tmp_lahir" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir">
              </div>

              <div class="form-group">
              <label for="exampleInputFile">Tanggal Lahir</label>
                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
              </div>

              <div class="form-group">
              <label for="exampleInputFile">Jenis Kelamin</label>
              <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
\                    <option>Laki-laki</option>
                    <option>Perempuan</option>
              </select>              
            </div>

              <div class="form-group">
                <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat">
              </div>
              
              <div class="form-group">
              <label for="exampleInputFile">Pendidikan</label>
                <select id="pendidikan" name="pendidikan" class="form-control" placeholder="Pendidikan">
                    <option>S3</option>
                    <option>S2</option>
                    <option>S1</option>
                    <option>D4</option>
                    <option>D3</option>
                    <option>D2</option>
                    <option>D1</option>
                    <option>SMK</option>
                    <option>SMA</option>
                    <option>SMP</option>
                    <option>SD</option>
              </select>
              </div>

              <div class="form-group">
                <input type="text" id="pangkat_golongan" name="pangkat_golongan" class="form-control" placeholder="Pangkat / Golongan">
              </div>

              <div class="form-group">
                <select id="jenis_jabatan" class="form-control" placeholder="Jenis Jabatan">
                    <option value="">Jenis Jabatan</option>
                    @foreach($jenisJabatan as $item)
                    <option Value="{{ $item->id }}">{{ $item->jenis_jabatan }}</option>
                    @endforeach
              </select>
              </div>

              <div class="form-group">
              <select id="jabatan" name="jabatan_id" class="form-control"></select>
              </div>

              <div class="form-group">
                <input type="text" id="users_id" name="users_id" class="form-control" placeholder="User ID">
              </div>

              <div class="form-group">
                <input type="text" id="tmt_masuk" name="tmt_masuk" class="form-control" placeholder="TMT Masuk (Non ASN)">
              </div>

              <div class="form-group">
              <label for="exampleInputFile">Tanggal Pensiun</label>
                <input type="date" id="tgl_pensiun" name="tgl_pensiun" class="form-control" placeholder="Tanggal Pensiun">
              </div>

              <div class="form-group">
                <input type="text" id="diklat_akhir" name="diklat_akhir" class="form-control" placeholder="Diklat Terakhir">
              </div>
              
              <div class="form-group">
               <button type="submit" class="btn btn-success">Simpan Data</button> 
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
