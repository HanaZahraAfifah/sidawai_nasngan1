@extends('layouts.app')

@section('title','Jenis Jabatan')

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
            <form action="{{ url('update-jenjab', $dtJenJab->id) }}" method="post">
              {{ csrf_field() }}

              <div class="form-group">
                <select id="jenis_jabatan" name="jenis_jabatan" class="form-control" placeholder="Jenis Jabatan" value="{{ $dtBiodata->jenis_jabatan }}">
                    <option>Jenis Jabatan</option>
                    <option>Struktural</option>
                    <option>Fungsional</option>
                    <option>Pelaksana</option>
                    <option>Tenaga Kontrak</option>
            </select>
              </div>

              <div class="form-group">
               <button type="submit" class="btn btn-primary">Ubah Data</button> 
              </div>

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