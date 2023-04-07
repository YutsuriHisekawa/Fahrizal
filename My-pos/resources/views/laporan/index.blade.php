@extends('layouts.admin')
@section('content')

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
@endpush

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Laporan Pendapatan {{ tanggal_indonesia($tanggalAwal, false) }} s/d {{ tanggal_indonesia($tanggalAkhir, false) }}</h3>
                <p class="text-subtitle text-muted">
                
                </p>
            </div>
    </div>
</div>

<div class="card">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header with-border">
                <button onclick="updatePeriode()" class="btn btn-success btn-xs btn-flat"><i class="bi bi-plus-circle"></i> Ubah Periode</button>
                <a href="{{ route('laporan.export_pdf', [$tanggalAwal, $tanggalAkhir]) }}" target="_blank" class="btn btn-success btn-xs btn-flat"><i class="bi bi-file-earmark-pdf"></i> Export PDF</a>
            </div>
            <div class="box-body table-responsive">
                <table class="table table-stiped table-bordered">
                    <thead>
                        <th width="5%">No</th>
                        <th>Tanggal</th>
                        <th>Penjualan</th>
                        <th>Pembelian</th>
                        <th>Pengeluaran</th>
                        <th>Pendapatan</th>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>





@includeIf('laporan.form')
@endsection

@push('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script>
    let table;
    $(function () {
        table = $('.table').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            autoWidth: false,
            ajax: {
                url: '{{ route('laporan.data', [$tanggalAwal, $tanggalAkhir]) }}',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'tanggal'},
                {data: 'penjualan'},
                {data: 'pembelian'},
                {data: 'pengeluaran'},
                {data: 'pendapatan'}
            ],
            dom: 'Brt',
            bSort: false,
            bPaginate: false,
        });
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true
        });
    });
    function updatePeriode() {
        $('#modal-form').modal('show');
    }
</script>

@endpush
