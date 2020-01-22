@extends('master')
@section('content')

<!-- ============================================================== -->
<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Pengeluaran </h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">List Pengeluaran</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end pageheader  -->
<!-- ============================================================== -->


<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Data Pengeluaran</h5>
            <div class="card-body">
                <!-- <a href="/pengeluaran/create" class="btn btn-primary">Tambah Pengeluaran</a> -->

                <div class="table-responsive ">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Total</th>
                                <th>Penerima</th>
                                <th>Kategori</th>
                                <th>Metode</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($expenses as $shir)
                            <?php $hasil = 'Rp ' . number_format($shir->total,2,',','.'); ?>
                            <tr>
                                <td>{{ $shir->date }}</td>
                                <td>{{ $shir->name }}</td>
                                <td>{{ $hasil }}</td>
                                <td>{{ $shir->to }}</td>
                                <td>{{ $shir->category }}</td>
                                <td>{{ $shir->method }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
