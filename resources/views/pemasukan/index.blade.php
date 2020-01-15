@extends('master')

@section('content')


<!-- ============================================================== -->
<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Pemasukan </h2>
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
            <h5 class="card-header">Data Pemasukan</h5>
            <div class="card-body">
                <!-- <a href="/pemasukan/create" class="btn btn-primary">Tambah Pemasukan</a> -->

                <div class="table-responsive m">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Nama</th>
                                <th>Total</th>
                                <th>Pemberi</th>
                                <th>Kategori</th>
                                <th>Metode</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($incomes as $key)
                            <tr>
                                <td>{{$key->date}}</td>
                                <td>{{$key->name}}</td>
                                <td>{{$key->total}}</td>
                                <td>{{$key->from}}</td>
                                <td>{{$key->category}}</td>
                                <td>{{$key->method}}</td>
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