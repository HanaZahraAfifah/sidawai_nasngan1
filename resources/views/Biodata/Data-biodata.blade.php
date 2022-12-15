@extends('layouts.app')

@section('title','Biodata Pegawai')

@section('css')
<link rel="stylesheet" href="{{ asset('adminLte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('adminLte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('adminLte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

@endsection

@section('js')
<script src="{{ asset('adminLte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('adminLte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>

<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true
        });
    });

</script>
@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1>@yield('title')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active">@yield('title')</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
  </section>
    <!-- /.content-header -->

    <audio hidden autoplay loop>
             <source src="{{ asset('AdminLte/dist/img/The_Heart_of_Borneo_Song.mp3')}}" type="audio/mpeg">
        </audio>

        <body class="hold-transition sidebar-mini">

    <!-- Main content -->
    <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data @yield('title')</h3>
                            <div class="card-tools">
        @if(Auth::user()->level == 'admin')    
                    <a href = "{{ route('create-biodata') }}" class = "btn btn-success">Tambah Data<i class = "fas fa-plus-square"></i></a>
                  @endif
                  </div>
                  </div>

  <div style="overflow-x:auto;">       
  <form class="form-inline">
            <div class="form-group">
            

  <div class = "card-body" >
  <table id="example1" class="table table-bordered table-default table-striped table-responsive">

  <thead class="table-dark">
            @if(Auth::user()->level == "admin")
                <tr>
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>NIP</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jenis Kelamin</th>
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
                    <th>Jenis Kelamin</th>
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
                </thead>
         <tbody>
                @if(Auth::user()->level == "user")
                <tr>
                    <td>{{ $dtBiodata->nama_pegawai }}</td>
                    <td>{{ $dtBiodata->nip }}</td>
                    <td>{{ $dtBiodata->tmp_lahir }}</td>
                    <td>{{ date('d-m-y', strtotime($dtBiodata->tgl_lahir)) }}</td>
                    <td>{{ $dtBiodata->jenis_kelamin }}</td>
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
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_pegawai }}</td>
                    <td>{{ $item->nip }}</td>
                    <td>{{ $item->tmp_lahir }}</td>
                    <td>{{ date('d-m-y', strtotime($item->tgl_lahir)) }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
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
                </div>
            </div>
        </div>
        </div>  
        </div>
        </div>
    </section>
    @include('sweetalert::alert')
    @endsection