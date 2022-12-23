@extends('layouts.app')

@section('title','Biodata Pegawai')

@section('css')
@endsection

@section('js')

<script src="{{ asset('AdminLte/plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('adminLte/dist/js/demo.js') }}"></script>
<script>
$(function () {
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });
    $('#jenis_jabatan').on('change', function () {
        var jabatan = $(this).val();
        if(jabatan) {
            $.ajax({
                url: '/getjabatan/'+jabatan, // yang ini urlnya harus sesuai dengan route web.php
                type: "GET",
                item : {"_token":"{{ csrf_token() }}"},
                dataType: "json",
                success:function(item)
                {
                    if(item){
                        $('#jabatan').empty();
                        $('#jabatan').append('<option hidden>Pilih Jabatan</option>'); 
                        $.each(item, function(key, jabatan){
                            $('select[name="jabatan_id"]').append('<option value="'+ jabatan.id +'">' + jabatan.nama_jabatan +'</option>');
                        });
                    }else{
                        $('#jabatan').empty();
                    }
                }
            });
        }else{
            $('#jabatan').empty();
        }
    });
});
</script>

<script>
$(function () {
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
    });
    $('#jenis_jabatan').on('change', function () {
        var tgl_pensiun = $(this).val();
        if (tgl_pensiun=="6") { document.getElementById('tgl_pensiun').disabled = true; }
       else{
            $('#tgl_pensiun').empty();
        }
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
              <li class="breadcrumb-item active"> @yield('title')</li>
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
            <h3 class="card-title">Tambah @yield('title')</h3>
            </div>

  <div class = "card-body">
            <form action="{{ route('simpan-biodata') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              
              <div class="form-group">
                <input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control" placeholder="Nama Pegawai">
              </div>

              <div class="form-group">
                <input type="text" id="nip" name="nip" class="form-control" placeholder="NIP">
              </div>

              <div class="form-group">
                <input type="text" id="tmp_lahir" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir">
              </div>

              <div class="form-group">
              <label for="exampleInputFile">Tanggal Lahir</label>
                <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
              </div>

              <div class="form-group">
              <label for="exampleInputFile">Jenis Kelamin</label>
              <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" placeholder="Jenis Kelamin">
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
              </select>              
            </div>

              <div class="form-group">
                <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Alamat">
              </div>
              
              <div class="form-group">
              <label for="exampleInputFile">Pendidikan</label>
                <select id="pendidikan" name="pendidikan" class="form-control" placeholder="Pendidikan">
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
                <input type="text" id="pangkat_golongan" name="pangkat_golongan" class="form-control" placeholder="Pangkat / Golongan">
              </div>

              <div class="form-group">
                <select id="jenis_jabatan" class="form-control" placeholder="Jenis Jabatan">
                    <option value="">Jenis Jabatan</option>
                    @foreach($jenisJabatan as $item)
                    <option Value="{{ $item->id }}">{{ $item->jenis_jabatan }}</option>
                    @endforeach
              </select>
              </div>

              <div class="form-group">
              <select id="jabatan" name="jabatan_id" class="form-control"></select>
              </div>

              <div class="form-group">
                <input type="text" id="users_id" name="users_id" class="form-control" placeholder="User ID">
              </div>

              <div class="form-group">
                <input type="text" id="tmt_masuk" name="tmt_masuk" class="form-control" placeholder="TMT Masuk (Non ASN)">
              </div>

              <div class="form-group">
              <label for="exampleInputFile">Tanggal Pensiun</label>
                <input type="date" id="tgl_pensiun" name="tgl_pensiun" class="form-control" placeholder="Tanggal Pensiun">
              </div>

              <div class="form-group">
                <input type="text" id="diklat_akhir" name="diklat_akhir" class="form-control" placeholder="Diklat Terakhir">
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