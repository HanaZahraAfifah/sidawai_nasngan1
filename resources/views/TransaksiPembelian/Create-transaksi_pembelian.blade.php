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
               <h3>Create Data Transaksi Pembelian</h3>
</div>
    </div>
    <!-- /.content -->
  </div>

  <div class = "card-body">
            <form action="{{ route('simpan-transaksi_pembelian') }}" method="post">
              {{ csrf_field() }}

              <div class="form-group">
                <input type="text" id="id_supplier" name="id_supplier" class="form-control" placeholder="ID Supplier">
              </div>

              <div class="form-group">
                <input type="text" id="kd_produk" name="kd_produk" class="form-control" placeholder="KD Produk">
              </div>

              <div class="form-group">
                <input type="text" id="nama_produk" name="nama_produk" class="form-control" placeholder="Nama Produk">
              </div>
              
              <div class="form-group">
                <select id="kategori" name="kategori" class="form-control" placeholder="Kategori">
                    <option>Pertanian</option>
                    <option>Perkebunan</option>
                </select>
              </div>

              <div class="form-group">
                <input type="text" id="harga_satuan" name="harga_satuan" class="form-control" placeholder="Harga Satuan">
              </div>

              <div class="form-group">
                <input type="text" id="quantity" name="quantity" class="form-control" placeholder="Quantity">
              </div>

              <div class="form-group">
                <input type="text" id="total_bayar" name="total_bayar" class="form-control" placeholder="Total Bayar">
              </div>

              <div class="form-group">
                <input type="text" id="id_petani" name="id_petani" class="form-control" placeholder="ID Petani">
              </div>

              <div class="form-group">
                <input type="text" id="nama_petani" name="nama_petani" class="form-control" placeholder="Nama Petani">
              </div>

              <div class="form-group">
               <button type="submit" class="btn btn-success">Simpan Data</button> 
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
