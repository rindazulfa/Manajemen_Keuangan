@extends('master')

@section('content')


<!-- ============================================================== -->
<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Dashboard </h2>
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
<!-- ============================================================== -->
<!-- widgets   -->
<!-- ============================================================== -->
<div class="row">
    <!-- ============================================================== -->
    <!-- four widgets   -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- total pemasukkan   -->
    <!-- ============================================================== -->
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h5 class="text-muted">Total Pemasukan</h5>
                    <h2 class="mb-0">Rp {{ $incomes }}
                        <</h2> </div> <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                            <i class="fa fa-money-bill-alt fa-fw fa-sm text-brand"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end total pemasukan   -->
    <!-- ============================================================== -->
     <!-- ============================================================== -->
    <!-- sisa uang   -->
    <!-- ============================================================== -->
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h5 class="text-muted">Sisa Uang</h5>
                    <h2 class="mb-0">Rp {{ $incomes }}
                        <</h2> </div> <div class="float-right icon-circle-medium  icon-box-lg  bg-brand-light mt-1">
                            <i class="fa fa-money-bill-alt fa-fw fa-sm text-brand"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end sisa uang   -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- total pengeluaran   -->
    <!-- ============================================================== -->
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-inline-block">
                    <h5 class="text-muted">Total Pengeluaran</h5>
                    <h2 class="mb-0">Rp {{ $expenses }}</h2>
                </div>
                <div class="float-right icon-circle-small  icon-box-sm  bg-brand-light mt-1">
                    <i class="fa fa-money-bill-alt fa-fw fa-sm text-brand"></i>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end total pengeluaran   -->
    <!-- ============================================================== -->


</div>

<div class="row">
    <!-- ============================================================== -->
    <!-- bar chart  -->
    <!-- ============================================================== -->
    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Bar Charts</h5>
            <div class="card-body">
                <canvas id="chart_pengeluaran"></canvas>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end bar chart  -->
    <!-- ============================================================== -->
</div>

<!-- recent orders  -->
<!-- ============================================================== -->
<div class="col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12">
    <div class="card">
        <h5 class="card-header">Recent Orders</h5>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-light">
                        <tr class="border-0">
                            <th class="border-0">#</th>
                            <th class="border-0">Image</th>
                            <th class="border-0">Product Name</th>
                            <th class="border-0">Product Id</th>
                            <th class="border-0">Quantity</th>
                            <th class="border-0">Price</th>
                            <th class="border-0">Order Time</th>
                            <th class="border-0">Customer</th>
                            <th class="border-0">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="m-r-10"><img src="assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                            </td>
                            <td>Product #1 </td>
                            <td>id000001 </td>
                            <td>20</td>
                            <td>$80.00</td>
                            <td>27-08-2018 01:22:12</td>
                            <td>Patricia J. King </td>
                            <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <div class="m-r-10"><img src="assets/images/product-pic-2.jpg" alt="user" class="rounded" width="45"></div>
                            </td>
                            <td>Product #2 </td>
                            <td>id000002 </td>
                            <td>12</td>
                            <td>$180.00</td>
                            <td>25-08-2018 21:12:56</td>
                            <td>Rachel J. Wicker </td>
                            <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <div class="m-r-10"><img src="assets/images/product-pic-3.jpg" alt="user" class="rounded" width="45"></div>
                            </td>
                            <td>Product #3 </td>
                            <td>id000003 </td>
                            <td>23</td>
                            <td>$820.00</td>
                            <td>24-08-2018 14:12:77</td>
                            <td>Michael K. Ledford </td>
                            <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>
                                <div class="m-r-10"><img src="assets/images/product-pic-4.jpg" alt="user" class="rounded" width="45"></div>
                            </td>
                            <td>Product #4 </td>
                            <td>id000004 </td>
                            <td>34</td>
                            <td>$340.00</td>
                            <td>23-08-2018 09:12:35</td>
                            <td>Michael K. Ledford </td>
                            <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
                        </tr>
                        <tr>
                            <td colspan="9"><a href="#" class="btn btn-outline-light float-right">View Details</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end recent orders  -->
<!-- ============================================================== -->




@endsection

@push('script')

<script>
    $.ajax({
        url: "/dashboard/chart-expense",
        type: "GET",
        dataType: 'json',
        success: function(rtnData) {
            console.log(rtnData)
            $.each(rtnData, function(dataType, data) {
                console.log(dataType)
                console.log(data.date);
                var ctx = document.getElementById("chart_pengeluaran").getContext("2d");
                var config = {
                    type: data.type,
                    data: {
                        datasets: data.datasets,
                        labels: data.labels
                    },
                    options: {
                        responsive: true,
                        title: {
                            display: true,
                            text: "Pengeluaran"
                        }
                    }
                };
                window.myPie = new Chart(ctx, config);
            });
        },
        error: function(rtnData) {
            alert('error' + rtnData);
            console.log(rtnData + " asdnjanj")
        }
    });
</script>

@endpush