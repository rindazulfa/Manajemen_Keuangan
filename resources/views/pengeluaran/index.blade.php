@extends('master')
@section('content')

<!-- ============================================================== -->
<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Pengeluaran </h2>
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
            <h5 class="card-header">Data Pengeluaran</h5>
            <div class="card-body">
                <a href="/pengeluaran/create" class="btn btn-primary">Tambah Pengeluaran</a>

                <div class="table-responsive mt-5">
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
                            @foreach($expenses as $key)
                            <tr>
                                <td>{{$key->date}}</td>
                                <td>{{$key->name}}</td>
                                <td>{{$key->total}}</td>
                                <td>{{$key->to}}</td>
                                <td>{{$key->expense_categories_id}}</td>
                                <td>{{$key->methods_id}}</td>
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