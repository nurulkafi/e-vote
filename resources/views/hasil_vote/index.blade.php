@extends('layouts.master')
@section('Vote','active')
@section('content')
<div class="main-content container-fluid">
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="card-header">
                        <h6>Tabel Hasil Voting</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                <th>No Urut</th>
                                <th>Jumlah Pemilih</th>
                                <th>Presentase</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data2 as $item)
                                <tr>
                                    <td>{{ $item['no_urut'] }}</td>
                                    <td>{{ $item['hasil'] }}</td>
                                    <td>{{ $item['presen'] }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>

    <div class="col-md-6">
        <div style="margin-bottom: 35px;">
            <div id="container" style="width: 100%; height: 100%; margin: 0 auto"></div>
        </div>
    </div>
</div>
</div>
@endsection
@push('chart')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script>
    $(document).ready(function(){

        Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Hasil Voting Pemilihan Ketua Dan Wakil Ketua BEM'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: {!! json_encode($hasil) !!}
    }]
    });
    })
</script>
@endpush
