@extends('layouts.app')

@section('title','Nama Jabatan')

@section('css')
@endsection

@section('js')

<script src="{{ asset('AdminLte/plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('adminLte/dist/js/demo.js') }}"></script>

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

    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
            <div class = "card-header">
            <h3 class="card-title">Ubah @yield('title')</h3>
        </div>
    <!-- /.content -->

  <div class = "card-body">
            <form action="{{ url('update-jabatan', $dtJab->id) }}" method="post">
              {{ csrf_field() }}

              <div class="form-group">
                <select id="jenis_jabatan_id" name="jenis_jabatan_id" class="form-control" placeholder="Jenis Jabatan" value="{{ $dtJab->jenis_jabatan }}">
                    <option>Jenis Jabatan</option>
                    <option>Struktural</option>
                    <option>Fungsional</option>
                    <option>Pelaksana</option>
            </select>
              </div>

              <div class="form-group">
              <select id="nama_jabatan" name="nama_jabatan" class="form-control" placeholder="Nama Jabatan" value="{{ $dtJab->nama_jabatan }}">
              <option>--Nama Jabatan Struktural--</option>
                    <option>Kepala Dinas</option>
                    <option>Sekretaris</option>
                    <option>Kabid. Produksi Tanaman Pangan</option>
                    <option>Kabid. Produksi Hortikultura</option>
                    <option>Kabid. Ketersediaan dan Distribusi Pangan</option>
                    <option>Kabid. Konsumsi dan Keamanan Pangan</option>
                    <option>Kasubbag. Perencanaan Program</option>
                    <option>Kasubbag. Umum</option>
                    <option>Kasubbag. Keuangan</option>
                    <option>Kasi. Sarana dan Prasarana Tanmanan Pangan</option>
                    <option>Kasi. Sarana dan Prasarana Hortikultura</option>
                    <option>Kasi. Harga Pangan</option>
                    <option>Kasi. Penganekaragaman Pangan</option>
                    <option>Kasi. Pengembangan Produksi Tanaman Pangan</option>
                    <option>Kasi. Pengembangan Produksi Hortikultura</option>
                    <option>Kasi. Ketersediaan dan Kerawanan Pangan</option>
                    <option>Kasi. Konsumsi Pangan</option>
                    <option>Kasi. Pasca Panen, Pengolahan Hasil dan Pemasaran Tanaman Pangan</option>
                    <option>Kasi. Pasca Panen, Pengolahan Hasil dan Pemasaran Tanaman Hortikultura</option>
                    <option>Kasi. Distribusi dan Cadangan Pangan</option>
                    <option>Kasi. Keamanan dan Kelembagaan Pangan</option>

                    <option>--Nama Jabatan Fungsional S1--</option>
                    <option>Ahli Pertama</option>
                    <option>Ahli Muda</option>
                    <option>Ahli Madya</option>
                    <option>Ahli Utama</option>

                    <option>--Nama Jabatan Fungsional D3--</option>
                    <option>Terampil</option>
                    <option>Penyelia</option>

                    <option>--Nama Jabatan Fungsional SMA--</option>
                    <option>Pemula</option>
                    <option>Terampil</option>
                    <option>Mahir</option>
                    <option>Penyelia</option>
              </select>  
            </div>

              <div class="form-group">
               <button type="submit" class="btn btn-primary">Ubah Data</button> 
               </div>
                
                </form>
            </div>
        </div>
    </div>
</section>
@endsection