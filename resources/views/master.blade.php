<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/charts/chartist-bundle/chartist.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/charts/morris-bundle/morris.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/charts/c3charts/c3.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/fonts/flag-icon-css/flag-icon.min.css')}}">

    <title>Bumblebee - Manajemen Keuangan</title>   
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper ">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-dark  fixed-top">
                <a class="navbar-brand" href="#">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" 
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link  fas fa-user mr-3" style="color: #fe8a90;" href="#" 
                            id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" 
                            aria-expanded="false"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" 
                            aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">{{Auth()->user()->name}}</h5>
                                    <span class="status"></span><span class="ml-9">Tersedia</span>
                                </div>
                                <a class="dropdown-item" href="{{Route('logout')}}">
                                    <i class="fas fa-power-off mr-2"></i>Keluar</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark bg-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <a class="d-xl-none d-lg-none " href="index.html">Dashboard iPocket</a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" 
                    data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                    aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider text-white mt-3 ">
                            MENU
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white" href="/dashboard">
                            <i class="fa fa-fw fa-user-circle text-white">                                
                            </i>Dashboard <span class="badge badge-success"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="/pemasukan" data-toggle="collapse" 
                            aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5">
                            <i class="far fa-money-bill-alt text-white"></i>Pemasukan</a>
                            <div id="submenu-5" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/pemasukan/create">Form</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="/pemasukan">List Pemasukan</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white" href="/pengeluaran" data-toggle="collapse" 
                            aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6">
                            <i class="fas fa-shopping-cart text-white"></i>Pengeluaran</a>
                            <div id="submenu-6" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/pengeluaran/create">Form</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/pengeluaran">List Pengeluaran</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white" href="/danaimpian" data-toggle="collapse" 
                            aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7">
                            <i class="fas fa-paper-plane text-white"></i>Dana Impian</a>
                            <div id="submenu-7" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="/danaimpian/create">Form</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/danaimpian">List Dana Impian</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
            </div>
            </nav>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="dashboard-ecommerce" style="background-color: #e5dfdf;">
            <div class="container-fluid dashboard-content ">

                <!-- Content -->
                @yield('content')

            </div>
        </div>
    </div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{asset('vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <!-- bootstap bundle js -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- slimscroll js -->
    <script src="{{asset('vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('libs/js/main-js.js')}}"></script>
    <!-- chart chartist js -->
    <script src="{{asset('vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
    <!-- sparkline js -->
    <script src="{{asset('vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
    <!-- morris js -->
    <script src="{{asset('vendor/charts/morris-bundle/raphael.min.js')}}"></script>
    <script src="{{asset('vendor/charts/morris-bundle/morris.js')}}"></script>
    <!-- chart c3 js -->
    <script src="{{asset('vendor/charts/c3charts/c3.min.js')}}"></script>
    <script src="{{asset('vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
    <script src="{{asset('vendor/charts/c3charts/C3chartjs.js')}}"></script>
    <script src="{{asset('vendor/charts/charts-bundle/Chart.bundle.js')}}"></script>
    <script src="{{asset('vendor/charts/charts-bundle/chartjs.js')}}"></script>
    <script src="{{asset('libs/js/dashboard-ecommerce.js')}}"></script>

    @stack('script')

</body>

</html>