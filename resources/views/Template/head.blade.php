<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('AdminLte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLte/dist/css/adminlte.min.css') }}">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
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