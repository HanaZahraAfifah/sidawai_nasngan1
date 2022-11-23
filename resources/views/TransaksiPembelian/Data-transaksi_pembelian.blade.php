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
            <h1 class="m-0">Data Transaksi Pembelian</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Transaksi Pembelian</li>
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
                    <a href = "{{ route('create-transaksi_pembelian') }}" class = "btn btn-success">Tambah Data<i class = "fas fa-plus-square"></i></a>
            </div>
    </div>
    <!-- /.content -->
  </div>

  <div class = "card-body">
            <table class ="table table-bordered">
                <tr>
                    <th>No</th>
                    <th>ID Supplier</th>
                    <th>KD Produk</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga Satuan</th>
                    <th>Quantity</th>
                    <th>Total Bayar</th>
                    <th>ID Petani</th>
                    <th>Nama Petani</th>
                    <th>Aksi</th>
                </tr>
                @foreach ($dtTranspemb as $item)
              
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->id_supplier }}</td>
                    <td>{{ $item->kd_produk }}</td>
                    <td>{{ $item->nama_produk }}</td>
                    <td>{{ $item->kategori }}</td>
                    <td>{{ $item->harga_satuan }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->total_bayar }}</td>
                    <td>{{ $item->id_petani }}</td>
                    <td>{{ $item->nama_petani }}</td>
                    <td>
                      <a href ="{{ url('edit-transaksi_pembelian',$item->id) }}"><i class="fas fa-edit"></i></a> |   
                      <a href ="{{ url('delete-transaksi_pembelian',$item->id) }}"><i class="fas fa-trash-alt" style="color: red"></i></a>
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