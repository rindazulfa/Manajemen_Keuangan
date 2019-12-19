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
                    <h2 class="mb-0">Rp {{ $incomes }}</h2>
                </div>
                <div class="float-right icon-circle-small  icon-box-sm  bg-brand-light mt-1">
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
                    <h2 class="mb-0">Rp {{ $expenses-$incomes }}</h2>
                </div>
                <div class="float-right icon-circle-small  icon-box-sm  bg-brand-light mt-1">
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
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Arus Keuangan per Periode</h5>
            <div class="card-body" >
                <canvas id="myChart"></canvas>
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
        <h5 class="card-header">Ringkasan Laporan</h5>
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-light">
                        <tr class="border-0">
                            <th class="border-0">No</th>
                            <th class="border-0">Image</th>
                            <th class="border-0">Category</th>
                            <th class="border-0">Day</th>
                            <th class="border-0">Quantity</th>
                            <th class="border-0">Price</th>
                            <th class="border-0">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="m-r-10"><img src="assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                            </td>
                            <td>Bisnis </td>
                            <td>2019-12-19</td>
                            <td>2</td>
                            <td>$80.00</td>
                            <td><span class="badge-dot badge-brand mr-1"></span>InTransit </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <div class="m-r-10"><img src="assets/images/product-pic-2.jpg" alt="user" class="rounded" width="45"></div>
                            </td>
                            <td>Bisnis </td>
                            <td>2019-12-19</td>
                            <td>2</td>
                            <td>$80.00</td>
                            <td><span class="badge-dot badge-success mr-1"></span>Delivered </td>
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
{{-- <script src="https://code.highcharts.com/highcharts.js"></script>

<script>
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Monthly Average Rainfall'
    },
    subtitle: {
        text: 'Source: WorldClimate.com'
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun',
            'Jul',
            'Aug',
            'Sep',
            'Oct',
            'Nov',
            'Dec'
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Rainfall (mm)'
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Tokyo',
        data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

    }, {
        name: 'New York',
        data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

    }, {
        name: 'London',
        data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

    }, {
        name: 'Berlin',
        data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

    }]
});
</script> --}}
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [12, 19, 3, 5, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    </script>
{{-- <script>
    $.ajax({
        url: "/dashboard/chart-expense",
        type: "GET",
        dataType: 'json',
        success: function(rtnData) {
            // console.log(rtnData)
            $.each(rtnData, function(dataType, data) {
                console.log(dataType)
                console.log(data);
                var ctx = document.getElementById("chart_pengeluaran").getContext("2d");
                var config = {
                    type: data.type,
                    data: {
                        datasets: data,
                        labels: ['pengeularan','pemasukan']
                    },
                    options: {
                        responsive: true,
                        title: {
                            display: true,
                            text: "Pengeluaran"
                        }
                    }
                };
                console.log(config);
                window.myPie = new Chart(ctx, config);
            });
        },
        error: function(rtnData) {
            alert('error' + rtnData);
            console.log(rtnData + " asdnjanj")
        }
    });
</script> --}}



{{-- <script>
    $.ajax({
        url: "/dashboard/chart-expense",
        type: "GET",
        dataType: 'json',
        success: function(rtnData) {
            // console.log(rtnData)
            $.each(rtnData, function(dataType, data) {
                console.log(dataType)
                console.log(data);
                var ctx = document.getElementById("chart_pengeluaran").getContext("2d");
                var config = {
                    type: data.type,
                    data: {
                        datasets: data,
                        labels: ['pengeularan','pemasukan']
                    },
                    options: {
                        responsive: true,
                        title: {
                            display: true,
                            text: "Pengeluaran"
                        }
                    }
                };
                console.log(config);
                window.myPie = new Chart(ctx, config);
            });
        },
        error: function(rtnData) {
            alert('error' + rtnData);
            console.log(rtnData + " asdnjanj")
        }
    });
</script> --}}
@endpush
