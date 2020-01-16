@extends('master')

@section('content')


<!-- ============================================================== -->
<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Dana Impian </h2>
            <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
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
            <h5 class="card-header">Data Dana Impian</h5>
            <div class="card-body">
                <!-- <a href="/pemasukan/create" class="btn btn-primary">Tambah Pemasukan</a> -->

                <div class="table-responsive m">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>Nama Rencana</th>
                                <th>Biaya yang dibutuhkan</th>
                                <th>Target Rencana</th>
                                <th>Inflasi</th>
                                <th>Perkiraan Perbulan</th>
                                <th>Biaya yang akan datang</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($hopes as $key)
                            <tr>
                                <td>{{$key->name}}</td>
                                <td>{{$key->cost}}</td>
                                <td>{{$key->month}} Bulan</td>
                                <td>{{$key->inflation}}</td>
                                <td>{{$key->per_month}}</td>
                                <td>{{$key->upcoming_costs}}</td>
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