@extends('master')

@section('content')


<!-- ============================================================== -->
<!-- pageheader  -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title mt-3 mb-0 text-dark">Dashboard </h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Grafik Pemasukan & Pengeluaran</li>
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
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card border-3 border-top border-top-primary">
            <div class="card-body">
                <div class="d-inline-block">
                    <h5 class="text-muted">Total Pemasukan</h5>
                    <?php $hasil = number_format($incomes,2,',','.'); ?>
                    <h2 class="mb-0" id="biaya">Rp {{$hasil }}</h2>
                </div>
                <div class="float-right icon-circle-small  icon-box-sm  bg-brand-light mt-1">
                    <i class="fa fa-fw fa-arrow-down fa-fw fa-sm text-brand"></i>
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
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card border-3 border-top border-top-primary">
            <div class="card-body">
                <div class="d-inline-block">
                    <h5 class="text-muted">Sisa Uang</h5>
                    <?php $sisa = number_format($incomes-$expenses,2,',','.'); ?>
                    <h2 class="mb-0" id="biaya">Rp {{ $sisa}}</h2>
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
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="card border-3 border-top border-top-primary">
            <div class="card-body">
                <div class="d-inline-block">
                    <h5 class="text-muted">Total Pengeluaran</h5>
                    <?php $keluar = number_format($expenses,2,',','.'); ?>
                    <h2 class="mb-0" id="biaya">Rp {{ $keluar }}</h2>
                </div>
                <div class="float-right icon-circle-small  icon-box-sm  bg-brand-light mt-1">
                    <i class="fa fa-fw fa-arrow-up fa-fw fa-sm text-brand"></i>
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
    <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">

            <h5 class="card-header">Arus Pemasukan Keuangan per Periode</h5>
            <div class="card-body" >
                    <button type="submit" class="btn btn-primary" onclick="updatechart()">month</button>
                    <button type="submit" class="btn btn-success" onclick="updatechartweek()">week</button>
                    <button type="submit" class="btn btn-danger" onclick="updatechartday()">day</button>
                    <button type="submit" class="btn btn-danger" onclick="gantiurl()">anjay</button>
                <canvas id="myChart"></canvas>
            </div>
        </div>
    </div> -->

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">

            <h5 class="card-header">Arus Pengeluaran Keuangan per Periode</h5>
            <div class="card-body">

                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-primary" onclick="updatechartexpense()">
                        <input type="radio" name="options">Bulan
                    </label>
                    <label class="btn btn-primary" onclick="updatechartweekexpense()">
                        <input type="radio" name="options">Minggu
                    </label>
                    <label class="btn btn-primary" onclick="updatechartdayexpense()">
                        <input type="radio" name="options">Hari
                    </label>
                </div>
                <!-- <button type="submit" class="btn btn-primary" onclick="updatechartexpense()">Bulan</button>
                <button type="submit" class="btn btn-success" onclick="updatechartweekexpense()">Minggu</button>
                <button type="submit" class="btn btn-danger" onclick="updatechartdayexpense()">Hari</button> -->
                <canvas id="chartexpense"></canvas>
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
                            <th class="border-0">Tanggal</th>
                            <th class="border-0">Nama</th>
                            <th class="border-0">Kategori</th>
                            <th class="border-0">Total</th>
                            <th class="border-0">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transaction as $key)
                        @php $date = date('Y-m',strtotime($key['date']))@endphp
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{$date }}</td>
                            <td>{{ $key['name'] }}</td>
                            <td>{{ $key['category'] }}</td>
                            <td>{{ $key['total'] }}</td>
                            @if($key['type'] == 'Income')
                            <td><span class="badge-dot badge-success mr-1"></span>Incomes</td>
                            @else
                            <td><span class="badge-dot badge-brand mr-1"></span>Exepense</td>
                            @endif
                        </tr>

                        @endforeach
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
<script src="https://cdn.jsdelivr.net/npm/moment@latest/moment.min.js"></script>

{{-- <script type="text/javascript">
    var chartku;
    var config;
    var urlku;
    $.ajax({
        url: "/dashboard/chart-income",
        type: "GET",
        dataType: 'json',
        success: function(rtnData) {
            $.each(rtnData, function(dataType, data) {
                console.log(data);
                var aku = [];
                var hello = [];
                var cobarray = [];
                 data.forEach((res) => {
                        var coba = new Date(res['date']).toLocaleString();
                        var coba2 = new Date(res['date']);
                        var total = res['total'];
                        var x = {};
                        var y = {};
                        var jumlah = {x:coba2,y:total};
                        aku.push(coba);
                        hello.push(jumlah);
                        var month = Math.floor((coba2.getMonth() + 3) / 3);
                        console.log(month);
                    });

                var ctx = document.getElementById("myChart").getContext("2d");
                config = {
                    type: 'line',
                    data: {
                        labels:  aku,
                        datasets: [{
                            label: 'week',
                            data: hello,
                            backgroundColor:
                                'rgba(255, 99, 132, 0.2)',
                            borderColor:
                                'rgba(255, 99, 132, 1)',
                            borderWidth: 1
                        },{
                            label: 'week',
                            data: hello,
                            backgroundColor:
                                'rgba(14, 103, 47, 0.2)',
                            borderColor:
                                'rgba(14, 103, 47, 1)',
                            borderWidth: 1
                        }
                        ]


                    },
                    options: {
                        responsive: true,
                        title: {
                            display: true,
                            text: "Pemasukan"
                        },
                        scales: {
                            xAxes: [{
                                type: 'time',
                                time: {
                                    unit: 'week',

                                }
                            }]
                        }

                    },

                };

                chartku = new Chart(ctx, config);
                console.log(config);
                window.myPie = chartku;
            });
        },
        error: function(rtnData) {
            alert('error' + rtnData);
            console.log(rtnData + " asdnjanj")
        }
    });

    function updatechart()
    {
     chartku.data.datasets[0].label = 'month';
     chartku.options.scales.xAxes[0].time = {
         unit: 'month'
     };
     chartku.update();
    }

    function updatechartweek()
    {
        chartku.data.datasets[0].label = 'week';
        chartku.options.scales.xAxes[0].time = {
         unit: 'week'
        };
        chartku.update();
    }

    function updatechartday()
    {
        chartku.data.datasets[0].label = 'day';
        chartku.options.scales.xAxes[0].time = {
         unit: 'day'
        };
        chartku.update();
    }

</script> --}}


<script type="text/javascript">
    var chartku;
    var config;
    $.ajax({
        url: "/dashboard/chart-expense",
        type: "GET",
        dataType: 'json',
        success: function(rtnData) {
            $.each(rtnData, function(dataType, data) {
                // console.log(rtnData['labels']);
                var eka = [];
                var rinda = [];
                var emboh = [];
                rtnData['labels2'].forEach((res) => {
                    var coba = new Date(res['date']).toLocaleString();
                    var coba2 = new Date(res['date']);
                    var total = res['total'];

                    console.log(total);
                    var x = {};
                    var y = {};
                    var jumlah = {
                        x: coba2,
                        y: total
                    };
                    eka.push(coba);
                    rinda.push(jumlah);
                });

                var aku = [];
                var hello = [];
                var cobarray = [];
                rtnData['labels'].forEach((res) => {
                    var coba = new Date(res['date']).toLocaleString();
                    var coba2 = new Date(res['date']);
                    var total = res['total'];
                    var x = {};
                    var y = {};
                    var jumlah = {
                        x: coba2,
                        y: total
                    };
                    aku.push(coba);
                    hello.push(jumlah);
                    // var month = Math.floor((coba2.getMonth() + 3) / 3);
                });

                var apasih = {};
                var westah = {
                    aku,
                    eka
                };
                console.log(westah);
                var ctx = document.getElementById("chartexpense").getContext("2d");
                config = {
                    type: 'line',
                    data: {
                        labels: westah,
                        datasets: [{
                            label: 'week',
                            data: hello,
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1
                        }, {
                            label: 'week',
                            data: rinda,
                            backgroundColor: 'rgba(14, 103, 47, 0.2)',
                            borderColor: 'rgba(14, 103, 47, 1)',
                            borderWidth: 1
                        }]


                    },
                    options: {
                        responsive: true,
                        title: {
                            display: true,
                            text: "Data Pemasukan & Pengeluaran"
                        },
                        scales: {
                            xAxes: [{
                                type: 'time',
                                time: {
                                    unit: 'week',

                                }
                            }]
                        }

                    },

                };

                    chartku = new Chart(ctx, config);
                    window.myPie = chartku;
            });
        },
        error: function(rtnData) {
            alert('error' + rtnData);
            console.log(rtnData + " asdnjanj");
        }
    });

    function updatechartexpense() {
        chartku.data.datasets[0].label = 'month';
        chartku.options.scales.xAxes[0].time = {
            unit: 'month'
        };
        chartku.update();
    }

    function updatechartweekexpense() {
        chartku.data.datasets[0].label = 'week';
        chartku.options.scales.xAxes[0].time = {
            unit: 'week'
        };
        chartku.update();
    }

    function updatechartdayexpense() {
        chartku.data.datasets[0].label = 'day';
        chartku.options.scales.xAxes[0].time = {
            unit: 'day'
        };
        chartku.update();
    }
</script>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

@endpush
