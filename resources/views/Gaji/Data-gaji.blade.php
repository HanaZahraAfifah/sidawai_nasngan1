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
            @if(Auth::user()->level == 'admin')    
                <div class = "card-tools">
                    <a href = "{{ route('create-gaji') }}" class = "btn btn-success">Tambah Data<i class = "fas fa-plus-square"></i></a>
                </div>
                @endif
                <br>
   <br>
  <div class = "card-body">
            <table class ="table table-bordered table-default table-striped">
            <thead class="table-dark">


            @if(Auth::user()->level == "admin")
                <tr>
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>NIP</th>
                    <th>Terhitung Mulai Tanggal</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                </tr>
                @endif


                @if(Auth::user()->level == "user")
                <tr>
                <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>NIP</th>
                    <th>Terhitung Mulai Tanggal</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                </tr>
                @endif
                </thead>


                @foreach ($dtGaji as $item)
                <tr>
                <td>{{ ++$i }}</td>
                    <td>{{ $item->biodata->nama_pegawai }}</td>
                    <td>{{ $item->nip }}</td>
                    <td>{{ $item->tmt }}</td>
                    <td>{{ $item->bulan }}</td>
                    <td>{{ $item->tahun }}</td>
                    <td>
                    @if(Auth::user()->level == 'admin')    
                    <a href ="{{ url('edit-gaji',$item->id) }}"><i class="fas fa-edit"></i></a>    
                      <a href ="{{ url('delete-gaji',$item->id) }}"><i class="fas fa-trash-alt" style="color: red"></i></a>
                      @endif
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
        </div>
        </div>
        </div>
        <div class="card-footer">
        @if(Auth::user()->level == "admin")
        Ini Halaman Ke-: {{ $dtGaji->currentPage() }}<br>
        Jumlah Data: {{ $dtGaji->total() }}<br>
        Data perhalaman: {{ $dtGaji->perPage() }}<br>
        <br>
        {{ $dtGaji->links() }}  
        @endif

          </div>
      </div>
    </div>
  </div>
</div>

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