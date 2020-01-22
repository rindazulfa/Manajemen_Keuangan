@extends('master')
@section('content')

<!-- ============================================================== -->
<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Form Pengeluaran</h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/dashboard" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Form Pengeluaran</li>
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
            <h5 class="card-header">Pengeluaran</h5>
            <div class="card-body">
                <form method="POST" action="{{ route('pengeluaran.store') }}">

                    @csrf

                    <div class="row">
                        <!-- Nama -->
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Nama Transaksi</label>
                                <input id="inputText3" type="text" name="name" class="form-control">
                            </div>
                        </div>

                        <!-- Tanggal -->
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Tanggal</label>
                                <input id="inputText3" type="date" name="date" class="form-control">
                            </div>
                        </div>

                        <!-- Kategori -->
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Kategori Pengeluaran</label>
                                <select class="form-control" name="category_id" id="input-select">
                                    @foreach($categories as $key)
                                    <option value="{{ $key->id }}">{{ $key->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Metode -->
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Metode Pembayaran</label>
                                <select class="form-control" name="method_id" id="input-select">
                                    @foreach($methods as $key)
                                    <option value="{{ $key->id }}">{{ $key->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Ke -->
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Penerima</label>
                                <input id="inputText3" type="text" name="to" class="form-control">
                            </div>
                        </div>

                        <!-- Total -->
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Total</label>
                                <input id="biaya" type="number" name="total" class="form-control">
                            </div>
                        </div>

                        <!-- Deskripsi -->
                        <div class="col-lg-6 col-sm-12">
                            <div class="form-group">
                                <label for="inputText3" class="col-form-label">Deskripsi</label>
                                <textarea name="description" class="form-control" rows="3"></textarea>
                            </div>
                        </div>



                        <!-- Button Simpan -->
                        <div class="col-lg-12 col-sm-12">
                            <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
@push('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function() {
        $('#biaya').mask('000.000.000', {
            reverse: true
        });
    });
</script>

@endpush