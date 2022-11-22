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
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Biodata Pegawai</li>
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
                    <a href = "{{ route('create-biodata') }}" class = "btn btn-success">Tambah Data<i class = "fas fa-plus-square"></i></a>
                  </div>
                  @endif
   <br>
   <br>

  <div style="overflow-x:auto;">       
  <form class="form-inline">
            <div class="form-group">
            

  <div class = "card-body" >
  <table class="table table-bordered table-default table-striped">

  <thead class="table-dark">


            @if(Auth::user()->level == "admin")
                <tr>
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>NIP</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Pendidikan</th>
                    <th>Pangkat / Golongan</th>
                    <th>Jenis Jabatan</th>
                    <th>Nama Jabatan</th>
                    <th>User ID</th>
                    <th>TMT Masuk (Non ASN)</th>
                    <th>Tanggal Pensiun</th>
                    <th>Diklat Terakhir</th>
                    <th>Aksi</th>
                </tr>
                @endif

                @if(Auth::user()->level == "user")
                <tr>
                  
                    <th>Nama Pegawai</th>
                    <th>NIP</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Pendidikan</th>
                    <th>Pangkat / Golongan</th>
                    <th>Jenis Jabatan</th>
                    <th>Nama Jabatan</th>
                    <th>TMT Masuk (Non ASN)</th>
                    <th>Tanggal Pensiun</th>
                    <th>Diklat Terakhir</th>
                </tr>
                @endif
                </div>
                </thead>

      
         
                @if(Auth::user()->level == "user")
                <tr>
                    <td>{{ $dtBiodata->nama_pegawai }}</td>
                    <td>{{ $dtBiodata->nip }}</td>
                    <td>{{ $dtBiodata->tmp_lahir }}</td>
                    <td>{{ date('d-m-y', strtotime($dtBiodata->tgl_lahir)) }}</td>
                    <td>{{ $dtBiodata->alamat }}</td>
                    <td>{{ $dtBiodata->pendidikan }}</td>
                    <td>{{ $dtBiodata->pangkat_golongan }}</td>
                    <td>{{ $dtBiodata->jabatan->jenisjabatan->jenis_jabatan }}</td>
                    <td>{{ $dtBiodata->jabatan->nama_jabatan }}</td>
                    <td>{{ $dtBiodata->tmt_masuk }}</td>
                    <td>@if($dtBiodata->jabatan->jenisjabatan->jenis_jabatan == "Non ASN")
                      @else
                      {{ date('d-m-y', strtotime($dtBiodata->tgl_pensiun)) }}
                      @endif
                    </td>                    
                    <td>{{ $dtBiodata->diklat_akhir }}</td>
                    <td>
                    </td>
                </tr>
                @else
                @foreach ($dtBiodata as $item)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $item->nama_pegawai }}</td>
                    <td>{{ $item->nip }}</td>
                    <td>{{ $item->tmp_lahir }}</td>
                    <td>{{ date('d-m-y', strtotime($item->tgl_lahir)) }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->pendidikan }}</td>
                    <td>{{ $item->pangkat_golongan }}</td>
                    <td>{{ $item->jabatan->jenisjabatan->jenis_jabatan }}</td>
                    <td>{{ $item->jabatan->nama_jabatan }}</td>
                    <td>{{ $item->users->id }}</td>
                    <td>{{ $item->tmt_masuk }}</td>
                    <td>@if($item->jabatan->jenisjabatan->jenis_jabatan == "Non ASN")
                      @else
                      {{ date('d-m-y', strtotime($item->tgl_pensiun)) }}
                      @endif
                    </td>                    
                    <td>{{ $item->diklat_akhir }}</td>
                    <td>
                    @if(Auth::user()->level == 'admin')    

                      <a href ="{{ url('edit-biodata',$item->id) }}"><i class="fas fa-edit"></i></a>  
                      <a href ="{{ url('delete-biodata',$item->id) }}"><i class="fas fa-trash-alt" style="color: red"></i></a>
                      @endif
                    </td>
                </tr>
                @endforeach
                @endif
            </table>
        </div>
        </div>
            </form>
            </div>
        </div>
        </div>


        <div class="card-footer">
        @if(Auth::user()->level == "admin")
          Ini Halaman Ke-: {{ $dtBiodata->currentPage() }}<br>
          Jumlah Data: {{ $dtBiodata->total() }}<br>
          Data perhalaman: {{ $dtBiodata->perPage() }}<br>
          <br>
          {{ $dtBiodata->links() }}  
        @endif
        </div>
    </div>
</div>
</div>
  </div>


   <!-- /.content -->
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
@include('Template.script')
<!-- jQuery -->

@include('sweetalert::alert')
</body>
</html>



