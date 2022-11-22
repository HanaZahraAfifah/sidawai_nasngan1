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
                <div class = "card-tools">
                    <a href = "{{ route('create-pensiun') }}" class = "btn btn-success">Tambah Data<i class = "fas fa-plus-square"></i></a>
            </div>
    </div>
    <!-- /.content -->
  </div>

  <div class = "card-body">
            <table class ="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>NIP</th>
                    <th>Tanggal Lahir</th>
                    <th>Tanggal Pensiun</th>
                    <th>Usia</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($dtPensiun as $item)
              
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nama_pegawai }}</td>
                    <td>{{ $item->nip }}</td>
                    <td>{{ $item->tgl_lahir }}</td>
                    <td>{{ $item->tgl_pensiun }}</td>
                    <td>{{ $item->usia }}</td>
                    <td>
                      <a href ="{{ url('edit-pensiun',$item->id) }}"><i class="fas fa-edit"></i></a> |   
                      <a href ="{{ url('delete-pensiun',$item->id) }}"><i class="fas fa-trash-alt" style="color: red"></i></a>
                    </td>
                </tr>
                @endforeach


            </table>
        </div>
        <div class="card-footer">
        
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

@include('sweetalert::alert')
</body>
</html>
