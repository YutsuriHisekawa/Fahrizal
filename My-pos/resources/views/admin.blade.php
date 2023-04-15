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
<script src="assets/extensions/chart.js/chart.js"></script>
<!-- <script src="assets/extensions/dashboard/dashboard.js"></script> -->
<!-- ChartJS -->

<script>
$(function() {

var ctx = document.getElementById("salesChart").getContext('2d');


var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels:{{ json_encode($data_tanggal) }},
        datasets: [{
            label: 'Pendapatan',
            data: {{ json_encode($data_pendapatan) }}, // Specify the data values array
            fill: false,
            borderColor: '#Ff0005', // Add custom color border (Line)
            backgroundColor: '#Ff0005', // Add custom color background (Points and Fill)
            borderWidth: 1 // Specify bar border width
        }]},
    options: {
      responsive: true, // Instruct chart js to respond nicely.
      maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
    }
});
});
</script>
@endpush


