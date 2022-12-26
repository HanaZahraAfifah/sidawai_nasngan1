@extends('layouts.app')

@section('title','Kenaikan Gaji Berkala')

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
             <source src="{{ asset('AdminLte/dist/img/Buah_Bolok.mp3')}}" type="audio/mpeg">
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
                    <a href = "{{ route('create-gaji') }}" class = "btn btn-success">Tambah Data<i class = "fas fa-plus-square"></i></a>
                @endif
                </div>
                </div>

<div style="overflow-x:auto;">       
  <form class="form-inline">
            <div class="form-group">

  <div class = "card-body">
            <table id="example1" class ="table table-bordered table-default table-striped">
            <thead class="table-dark">

            @if(Auth::user()->level == "admin")
                <tr>
                    <th>No</th>
                    <th>Nama Pegawai</th>
                    <th>NIP</th>
                    <th>Terhitung Mulai Tanggal</th>
                    <th>Bulan</th>
                    <th>Tahun</th>
                    <th>SK KGB</th>
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
                    <th>SK KGB</th>
                </tr>
                @endif
                </thead>

<tbody>
                @foreach ($dtGaji as $item)
                <tr>
                <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->biodata->nama_pegawai }}</td>
                    <td>{{ $item->nip }}</td>
                    <td>{{ $item->tmt }}</td>
                    <td>{{ $item->bulan }}</td>
                    <td>{{ $item->tahun }}</td>
                    <td>
                      @if($item->sk_kgb)
                        <a target="blank" href="{{ asset('sk_kgb/'.$item->sk_kgb) }}">lihat SK</a>
                      @else
                        <a>tidak ada file</a>
                      @endif
                    </td>
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
        </div>
        </div>
        </div>  
        </div>
    </section>
    @include('sweetalert::alert')
    @endsection