@extends('layouts.admin')

@section('content')

    <h3>Statistics Store</h3>
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                    <i class="bi bi-boxes" style="font-size: 3em;"></i>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <a href="{{ route('kategori.index') }}" class="text-muted font-semibold">Kategori</a>
                                    <h6  class="font-extrabold mb-0">{{$kategori}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">

                                    <i class="bi bi-box-seam" style="font-size: 3em;"></i>

                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <a href="{{ route('produk.index') }}" class="text-muted font-semibold">Produk</a>
                                    <h6 class="font-extrabold mb-0">{{$produk}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                    <i class="bi bi-people" style="font-size: 3em;"></i>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <a href="{{ route('member.index') }}" class="text-muted font-semibold">Member</a>
                                    <h6 class="font-extrabold mb-0">{{$member}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                                    <i class="bi bi-truck" style="font-size: 3em;"></i>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                <a href="{{ route('supplier.index') }}" class="text-muted font-semibold">Supplier</a>
                                    <h6 class="font-extrabold mb-0">{{$supplier}}</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Grafik Pendapatan {{ tanggal_indonesia($tanggal_awal, false) }} s/d {{ tanggal_indonesia($tanggal_akhir, false) }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="card">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="chart">
                            <!-- Sales Chart Canvas -->
                            <canvas id="salesChart" style="height: 180px;"></canvas>
                        </div>
                        <!-- /.chart-responsive -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row (main row) -->
@endsection

@push('scripts')
<script src="assets/extensions/chart.js/Chart.js"></script>
<script src="assets/extensions/dashboard/dashboard.js"></script>
<!-- ChartJS -->

<script>
$(function() {
    // Get context with jQuery - using jQuery's .get() method.
    var salesChartCanvas = $('#salesChart').get(0).getContext('2d');
    // This will get the first returned node in the jQuery collection.
    var salesChart = new Chart(salesChartCanvas);
    var salesChartData = {
        labels: {{ json_encode($data_tanggal) }},
        datasets: [
            {
                label: 'Pendapatan',
                fillColor           : 'rgba(60,141,188,0.9)',
                strokeColor         : 'rgba(60,141,188,0.8)',
                pointColor          : '#3b8bba',
                pointStrokeColor    : 'rgba(60,141,188,1)',
                pointHighlightFill  : '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: {{ json_encode($data_pendapatan) }}
            }
        ]
    };
    var salesChartOptions = {
        pointDot : false,
        responsive : true
    };
    salesChart.Line(salesChartData, salesChartOptions);
});
</script>
@endpush
