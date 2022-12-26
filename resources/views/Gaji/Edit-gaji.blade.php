@extends('layouts.app')

@section('title','Kenaikan Gaji Berkala')

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

    <audio hidden autoplay loop>
             <source src="{{ asset('AdminLte/dist/img/Buah_Bolok.mp3')}}" type="audio/mpeg">
        </audio>

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
            <form action="{{ url('update-gaji', $dtGaji->id) }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="form-group">
              <label for="exampleInputFile">Nama Pegawai</label>
                <select class="form-control select2" style="width: 100%;" name="nama_pegawai_id" id="nama_pegawai_id">
                <option  value="">Nama Pegawai</option>
                @foreach ($dtBiodata as $item)
                <option value="{{ $item ['id'] }}"{{ $item ['id']==$dtGaji->nama_pegawai_id ? 'selected="selected"' : '' }}>{{ $item['nama_pegawai']}}</option>
                @endforeach
              </select>
              </div>
              
              <div class="form-group">
              <label for="exampleInputFile">NIP</label>
                <input type="text" id="nip" name="nip" class="form-control" placeholder="NIP" value="{{ $dtGaji->nip }}">
              </div>

              <div class="form-group">
              <label for="exampleInputFile">Terhitung Mulai Tanggal</label>
                <select id="tmt" name="tmt" class="form-control" placeholder="Terhitung Mulai Tanggal" value="{{ $dtGaji->tmt }}">
                    <option>Terhitung Mulai Tanggal</option>
                    <option>Ganjil</option>
                    <option>Genap</option>
                </select>
              </div>

              <div class="form-group">
              <label for="exampleInputFile">Bulan</label>
                <input type="text" id="bulan" name="bulan" class="form-control" placeholder="Bulan" value="{{ $dtGaji->bulan }}">
              </div>

              <div class="form-group">
              <label for="exampleInputFile">Tahun</label>
                <input type="text" id="tahun" name="tahun" class="form-control" placeholder="Tahun" value="{{ $dtGaji->tahun }}">
              </div>

              <div class="form-group">
              <label for="exampleInputFile">SK KGB</label>
                <input type="file" id="sk_kgb" name="sk_kgb" class="form-control" placeholder="SK KGB" value="{{ $dtGaji->sk_kgb }}">
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