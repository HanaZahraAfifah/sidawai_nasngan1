@extends('layouts.app')

@section('title','Dashboard')

@section('js')
<script src="{{ asset('AdminLte/plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('AdminLte/dist/js/demo.js') }}"></script>

<script>
$(function () {
    var pegawaiASN = $('#barChart').get(0).getContext('2d')
    var pegawaiNonASN = $('#barChart1').get(0).getContext('2d')

    var barChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        datasetFill: false
    }

    new Chart(pegawaiASN, {
        type: 'bar',
        data: {
            labels: [
            @foreach($pegawaiASN as $item)
                "{{ $item->pendidikan }}",
            @endforeach
            ],
            datasets: [{
                label: 'ASN',
                backgroundColor: 'rgba(60,141,188,0.9)',
                borderColor: 'rgba(60,141,188,0.8)',
                pointRadius: false,
                pointColor: '#3b8bba',
                pointStrokeColor: 'rgba(60,141,188,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: [
                    @foreach($pegawaiASN as $item)
                        {{ $item->total }},
                    @endforeach
                ]
            }]
        },
        options: barChartOptions
    })

    new Chart(pegawaiNonASN, {
        type: 'bar',
        data: {
            labels: [
            @foreach($pegawaiNonASN as $item)
                "{{ $item->pendidikan }}",
            @endforeach
            ],
            datasets: [{
                label: 'Non ASN',
                backgroundColor: '#77C9FF',
                borderColor: '#77C9FF',
                pointRadius: false,
                pointColor: '#77C9FF',
                pointStrokeColor: '#77C9FF',
                pointHighlightFill: '#fff',
                pointHighlightStroke: '#77C9FF',
                data: [
                    @foreach($pegawaiNonASN as $item)
                        {{ $item->total }},
                    @endforeach
                ]
            }]
        },
        options: barChartOptions
    })

})
</script>
@endsection

@section('content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Jumlah Data Yang Telah Diinput</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Beranda</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <span class="info-box-number">
                            <h3>{{$dtBiodata}}</h3>
                        </span>
                        <p>Biodata Pegawai</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-address-card"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <span class="info-box-number">
                            <h3>{{$dtDiklat}}</h3>
                        </span>
                        <p>Diklat Pegawai</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-file"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <span class="info-box-number">
                            <h3>{{$dtGaji}}</h3>
                        </span>
                        <p>Kenaikan Gaji Berkala</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-arrow-up"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box bg-danger">
                    <div class="inner">
                        <span class="info-box-number">
                            <h3>{{$dtCuti}}</h3>
                        </span>
                        <p>Data Cuti Pegawai</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Tingkat Pendidikan Pegawai ASN</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="barChart" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Tingkat Pendidikan Pegawai Non ASN</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="barChart1" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
