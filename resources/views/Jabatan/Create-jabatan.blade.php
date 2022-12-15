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
            <li class="breadcrumb-item active"> @yield('title')</li>
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
            <h3 class="card-title">Tambah @yield('title')</h3>
</div>

  <div class = "card-body">
            <form action="{{ route('simpan-jabatan') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}

              <div class="form-group">
                <select class="form-control select2" style="width: 100%;" name="jenis_jabatan_id" id="jenis_jabatan_id">
                <option disable value="">Jenis Jabatan</option>
                @foreach ($dtJenJab as $item)
                <option value="{{ $item->id }}">{{ $item->jenis_jabatan}}</option>
                @endforeach
              </select>
              </div>

              <div class="form-group">
                <input type="text" id="nama_jabatan" name="nama_jabatan" class="form-control" placeholder="Nama Jabatan">
              </div>
              
              <div class="form-group">
               <button type="submit" class="btn btn-success">Simpan Data</button> 
               </div>
                       
                       </form>
                   </div>
               </div>
           </div>
</section>
@endsection