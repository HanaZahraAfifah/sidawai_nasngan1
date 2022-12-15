@extends('layouts.app')

@section('title','Biodata Pegawai')

@section('css')
@endsection

@section('js')

<script src="{{ asset('AdminLte/plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('adminLte/dist/js/demo.js') }}"></script>

@endsection

@section('content')
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
            <form action="{{ url('update-biodata', $dtBiodata->id) }}" method="post">
              {{ csrf_field() }}

              <div class="form-group">
              <label for="exampleInputFile">Nama Pegawai</label>
                <input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control" placeholder="Nama Pegawai" value="{{ $dtBiodata->nama_pegawai }}">
              </div>
              
              <div class="form-group">
              <label for="exampleInputFile">NIP</label>
                <input type="text" id="nip" name="nip" class="form-control" placeholder="NIP" value="{{ $dtBiodata->nip }}">
              </div>

              <div class="form-group">
              <label for="exampleInputFile">Tempat Lahir</label>
                <input type="text" id="tmp_lahir" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir" value="{{ $dtBiodata->tmp_lahir }}">
              </div>

              <div class="form-group">
              <label for="exampleInputFile">Tanggal Lahir</label>
                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir" value="{{ $dtBiodata->tgl_lahir }}">
              </div>

              <div class="form-group">
              <label for="exampleInputFile">Jenis Kelamin</label>
              <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin" value="{{ $dtBiodata->jenis_kelamin }}">
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
            </select>             
           </div>

              <div class="form-group">
              <label for="exampleInputFile">Alamat</label>
                <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat" value="{{ $dtBiodata->alamat }}">
              </div>

              <div class="form-group">
              <label for="exampleInputFile">Pendidikan</label>
              <select id="pendidikan" name="pendidikan" class="form-control" placeholder="Pendidikan" value="{{ $dtBiodata->pendidikan }}">
                    <option>S3</option>
                    <option>S2</option>
                    <option>S1</option>
                    <option>D4</option>
                    <option>D3</option>
                    <option>D2</option>
                    <option>D1</option>
                    <option>SMK</option>
                    <option>SMA</option>
                    <option>SMP</option>
                    <option>SD</option>
              </select>
              </div>
              
              <div class="form-group">
              <label for="exampleInputFile">Pangkat / Golongan</label>
                <input type="text" id="pangkat_golongan" name="pangkat_golongan" class="form-control" placeholder="Pangkat / Golongan" value="{{ $dtBiodata->pangkat_golongan }}">
              </div>

              <div class="form-group">
              <label for="exampleInputFile">Jenis Jabatan</label>
                <select class="form-control select2" style="width: 100%;" name="jenis_jabatan" id="jenis_jabatan">
                <option  value="">Jenis Jabatan</option>
                @foreach ($dtJenJab as $item)
                <option value="{{ $item ['id'] }}"{{ $item ['id']==$dtBiodata->jenis_jabatan_id ? 'selected="selected"' : '' }}>{{ $item['jenis_jabatan']}}</option>
                @endforeach
              </select>
              </div>

              <div class="form-group">
              <label for="exampleInputFile">Nama Jabatan</label>
                <select class="form-control select2" style="width: 100%;" name="nama_jabatan_id" id="nama_jabatan_id">
                <option  value="">Pilih Jabatan</option>
                @foreach ($dtJab as $item)
                <option value="{{ $item ['id'] }}"{{ $item ['id']==$dtBiodata->nama_jabatan_id ? 'selected="selected"' : '' }}>{{ $item['nama_jabatan']}}</option>
                @endforeach
              </select>
              </div>

              <div class="form-group">
              <label for="exampleInputFile">User ID</label>
                <input type="text" id="users_id" name="users_id" class="form-control" placeholder="User ID" value="{{ $dtBiodata->users_id }}">
              </div>

              <div class="form-group">
              <label for="exampleInputFile">Terhitung Mulai Tanggal Masuk (TMT)</label>
                <input type="text" id="tmt_masuk" name="tmt_masuk" class="form-control" placeholder="TMT Masuk (Non ASN)" value="{{ $dtBiodata->tmt_masuk }}">
              </div>
             

            <div class="form-group">
            <label for="exampleInputFile">Tanggal Pensiun</label>
                <input type="date" id="tgl_pensiun" name="tgl_pensiun" class="form-control" placeholder="Tanggal Pensiun" value="{{ $dtBiodata->tgl_pensiun }}">
              </div>

              <div class="form-group">
              <label for="exampleInputFile">Diklat Akhir</label>
                <input type="text" id="diklat_akhir" name="diklat_akhir" class="form-control" placeholder="Diklat Terakhir" value="{{ $dtBiodata->diklat_akhir }}">
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