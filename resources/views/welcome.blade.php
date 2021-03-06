<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Bumblebee</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" type="image/png">

    <!--====== Animate CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/LineIcons.css')}}">

    <!--====== Font Awesome CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navbar-area ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="{{asset('assets/images/logo.png')}}" alt="Logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" 
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                            aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item active">
                                        <a class="page-scroll" href="#home">Beranda</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#rumusan">Rumusan Masalah</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#tujuan">Tujuan</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#batasan">Batasan Masalah</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#konsep">Landasan Teori</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#team">Team</a>
                                    </li>

                                </ul>
                            </div>
                            <!-- navbar collapse -->

                            <div class="navbar-btn d-none d-sm-inline-block">
                                <a class="main-btn" data-scroll-nav="0" href="/login">Masuk</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div id="home" class="header-hero bg_cover" style="background-image: url(assets/images/banner-bg.svg)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="header-hero-content text-center">
                            <h3 class="header-sub-title wow fadeInUp" data-wow-duration="1.3s" 
                            data-wow-delay="0.2s">Bumblebee</h3>
                            <h2 class="header-title wow fadeInUp" data-wow-duration="1.3s" 
                            data-wow-delay="0.5s">Aplikasi akutansi gratis</h2>
                            <p class="text wow fadeInUp" data-wow-duration="1.3s" 
                            data-wow-delay="0.8s">Yuk, Buruan Gabung!! Atur Keuangan Pribadimu 
                            & Capai Target Impianmu!!</p>
                            <a href="/register" rel="nofollow" class="main-btn wow fadeInUp" 
                            data-wow-duration="1.3s" data-wow-delay="1.1s">Daftar Sekarang!</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header-hero-image text-center wow fadeIn" data-wow-duration="1.3s" 
                        data-wow-delay="1.4s">
                            <img src="assets/images/header-hero.png" alt="hero">
                        </div>
                    </div>
                </div>
            </div>
            <div id="particles-1" class="particles"></div>
        </div>
    </header>

    <!--====== HEADER PART ENDS ======-->

    <!--====== RUMUSAN MASALAH PART START ======-->
    <!-- section title -->
    <section id="rumusan" class="services-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">Rumusan <span>Masalah</span></h3>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row justify-content-center">
                <!-- single services -->
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center wow fadeIn" data-wow-duration="1s" 
                    data-wow-delay="0.2s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="assets/images/services-shape-1.svg" alt="shape">
                            <i class="lni-baloon"></i>
                        </div>
                        <div class="services-content ">
                            <h4 class="services-title"><a href="#">1</a></h4>
                            <p class="text">Bagaimana mengetahui laporan pemasukan dan pengeluaran 
                                keuangan pada periode tertentu ? </p>
                        </div>
                    </div>
                </div>
                <!-- single services -->
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center wow fadeIn" data-wow-duration="1s" 
                    data-wow-delay="0.5s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="assets/images/services-shape-2.svg" alt="shape">
                            <i class="lni-cog"></i>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="#">2</a></h4>
                            <p class="text">Bagaimana mengawasi tingkat keuangan dalam bentuk data diagram 
                                statistik dari setiap periode yang ditentukan ?</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row justify-content-center">
                <!-- single services -->
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" 
                    data-wow-delay="0.8s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="assets/images/services-shape-3.svg" alt="shape">
                            <i class="lni-bolt-alt"></i>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="#">3</a></h4>
                            <p class="text">Bagaimana mengontrol dan mengawasi dari uang yang 
                                dimiliki saat ini ?</p>
                        </div>
                    </div>
                </div>
                <!-- single services -->
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" 
                    data-wow-delay="0.8s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="assets/images/services-shape-1.svg" alt="shape">
                            <i class="lni-plane"></i>
                        </div>
                        <div class="services-content">
                            <h4 class="services-title"><a href="#">4</a></h4>
                            <p class="text">Bagaimana mengetahui dan menentukan rencana yang akan mendatang?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== RUMUSAN PART ENDS ======-->

    <!--====== TUJUAN PART START ======-->
    <!-- section title -->
    <section id="tujuan" class="services-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">Tujuan<span>nya adalah</span></h3>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row justify-content-center">
                <!-- single services -->
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" 
                    data-wow-delay="0.2s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="assets/images/services-shape-1.svg" alt="shape">
                            <i class="lni-baloon"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">1</a></h4>
                            <p class="text">Mengetahui laporan pemasukan dan pengeluaran keuangan dalam 
                                periode tertentu.</p>
                        </div>
                    </div> <!-- single services -->
                </div>
                <!-- single services -->
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" 
                    data-wow-delay="0.5s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="assets/images/services-shape-2.svg" alt="shape">
                            <i class="lni-cog"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">2</a></h4>
                            <p class="text">Mengawasi tingkat keuangan dalam bentuk data diagram 
                                statistik dari setiap periode yang ditentukan.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row justify-content-center">
                <!-- single services -->
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" 
                    data-wow-delay="0.8s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="assets/images/services-shape-3.svg" alt="shape">
                            <i class="lni-bolt-alt"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">3</a></h4>
                            <p class="text">Mengontrol dan mengawasi dari uang yang dimiliki saat ini.</p>
                        </div>
                    </div>
                </div>
                <!-- single services -->
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" 
                    data-wow-delay="0.8s">
                        <div class="services-icon">
                            <img class="shape" src="assets/images/services-shape.svg" alt="shape">
                            <img class="shape-1" src="assets/images/services-shape-2.svg" alt="shape">
                            <i class="lni-plane"></i>
                        </div>
                        <div class="services-content mt-30">
                            <h4 class="services-title"><a href="#">4</a></h4>
                            <p class="text">Mengetahui dan menentukan rencana yang akan mendatang.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--====== TUJUAN PART ENDS ======-->

    <!--====== BATASAN MASALAH PART START ======-->

    <section id="batasan" class="about-area pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" 
                    data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">Batasan <span>Masalah</span></h3>
                        </div>
                        <p class="text">
                            Berdasarkan uraian rumusan masalah dan tujuan diatas, maka dalam website 
                            iPocket ini hanya membahas dan berisi mengenai laporan pemasukan dan 
                            pengeluaran pribadi seseorang dalam periode tertentu, data statistik berupa 
                            diagram berdasarkan pada pemasukan dan pengeluaran pada periode tertentu, 
                            serta perhitungan untuk menentukan dana impian pengguna.
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" 
                    data-wow-delay="0.5s">
                        <img src="assets/images/about1.svg" alt="about">
                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape-1">
            <img src="assets/images/about-shape-1.svg" alt="shape">
        </div>
    </section>

    <!--====== BATASAN MASALAH PART ENDS ======-->

    <!--====== KONSEP DASAR PART START ======-->

    <section id="konsep" class="about-area pt-70">
        <div class="about-shape-2">
            <img src="assets/images/about-shape-2.svg" alt="shape">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-last">
                    <div class="about-content mt-50 wow fadeInLeftBig" data-wow-duration="1s" 
                    data-wow-delay="0.5s">
                        <div class="section-title">
                            <div class="line"></div>
                            <h3 class="title">Manajemen <span> Keuangan Pribadi</span></h3>
                        </div> <!-- section title -->
                        <p class="text">
                            Manajemen keuangan pribadi adalah seni dan ilmu mengelola sumber daya (money) 
                            dari unit individual / rumah tangga (Gitman 2002).
                            Membahas tentang kedisiplinan yang merupakan kesadaran diri untuk mematuhi
                            aturan serta kemampuan diri untuk menyesuaikan dirinya dengan perubahan,
                            maka secara eksplisit telah menyentuh kontrol diri (self control).
                            Hal ini berpijak pada alasan bahwa sukses atau tidaknya seseorang juga salah
                            satunya turut dipengaruhi oleh kontrol diri (Tangney, Baumeister & Boone 2004).
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-first">
                    <div class="about-image text-center mt-50 wow fadeInRightBig" data-wow-duration="1s" 
                    data-wow-delay="0.5s">
                        <img src="assets/images/about2.svg" alt="about">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--====== START TEAM ======-->
    <section id="team" class="services-area pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <!-- section title -->
                    <div class="section-title text-center pb-40">
                        <div class="line m-auto"></div>
                        <h3 class="title">Kelompok<span> Bumblebee</span></h3>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row justify-content-center">
                <!-- Bela Tertiana -->
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" 
                    data-wow-delay="0.2s">

                        <div class="thumb d-flex justify-content-sm-center">
                            <figure>
                                <img class="img-fluid" src="assets/images/terti.jpg" alt="" />
                            </figure>
                        </div>
                        <div class="meta-text text-sm-center">
                            <h4>Bela Tertiana</h4>
                            <p class="designation">18410100103</p>
                            <div class="align-items-center justify-content-center d-flex">
                                <div class="social">
                                    <!-- <ul class="social"> -->
                                    <a href="#"><i class="lni-facebook-filled"></i></a>
                                    <a href="#"><i class="lni-twitter-filled"></i></a>
                                    <a href="#"><i class="lni-instagram-filled"></i></a>
                                    <a href="#"><i class="lni-github-original"></i></a>
                                    <!-- </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Nada Navis -->
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" 
                    data-wow-delay="0.2s">

                        <div class="thumb d-flex justify-content-sm-center">
                            <figure>
                                <img class="img-fluid" src="assets/images/nada.jpg" alt="" />
                            </figure>
                        </div>
                        <div class="meta-text text-sm-center">
                            <h4>Nada Navis</h4>
                            <p class="designation">18410100124</p>
                            <div class="align-items-center justify-content-center d-flex">
                                <div class="social">
                                    <!-- <ul class="social"> -->
                                    <a href="#"><i class="lni-facebook-filled"></i></a>
                                    <a href="#"><i class="lni-twitter-filled"></i></a>
                                    <a href="#"><i class="lni-instagram-filled"></i></a>
                                    <a href="#"><i class="lni-github-original"></i></a>
                                    <!-- </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Putu Ayu -->
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" 
                    data-wow-delay="0.2s">

                        <div class="thumb d-flex justify-content-sm-center">
                            <figure>
                                <img class="img-fluid" src="assets/images/amel.jpg" alt="" />
                            </figure>
                        </div>
                        <div class="meta-text text-sm-center">
                            <h4>Putu Ayu Amalia</h4>
                            <p class="designation">18410100128</p>
                            <div class="align-items-center justify-content-center d-flex">
                                <div class="social">
                                    <!-- <ul class="social"> -->
                                    <a href="#"><i class="lni-facebook-filled"></i></a>
                                    <a href="#"><i class="lni-twitter-filled"></i></a>
                                    <a href="#"><i class="lni-instagram-filled"></i></a>
                                    <a href="#"><i class="lni-github-original"></i></a>
                                    <!-- </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row justify-content-center">
                <!-- Rinda -->
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" 
                    data-wow-delay="0.2s">

                        <div class="thumb d-flex justify-content-sm-center">
                            <figure>
                                <img class="img-fluid" src="assets/images/rinda.jpg" alt="" />
                            </figure>
                        </div>
                        <div class="meta-text text-sm-center">
                            <h4>Eka Hirinda Zulfa</h4>
                            <p class="designation">18410100132</p>
                            <div class="align-items-center justify-content-center d-flex">
                                <div class="social">
                                    <!-- <ul class="social"> -->
                                    <a href="#"><i class="lni-facebook-filled"></i></a>
                                    <a href="#"><i class="lni-twitter-filled"></i></a>
                                    <a href="#"><i class="lni-instagram-filled"></i></a>
                                    <a href="#"><i class="lni-github-original"></i></a>
                                    <!-- </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Ayub R -->
                <div class="col-lg-3 col-md-6 col-sm-12 ">
                    <div class="single-services text-center mt-30 wow fadeIn" data-wow-duration="1s" 
                    data-wow-delay="0.2s">

                        <div class="thumb d-flex justify-content-sm-center">
                            <figure>
                                <img class="img-fluid" src="assets/images/ayub.jpg" alt="" />
                            </figure>
                        </div>
                        <div class="meta-text text-sm-center">
                            <h4>Ayub</h4>
                            <p class="designation">18410100174</p>
                            <div class="align-items-center justify-content-center d-flex">
                                <div class="social">
                                    <!-- <ul class="social"> -->
                                    <a href="#"><i class="lni-facebook-filled"></i></a>
                                    <a href="#"><i class="lni-twitter-filled"></i></a>
                                    <a href="#"><i class="lni-instagram-filled"></i></a>
                                    <a href="#"><i class="lni-github-original"></i></a>
                                    <!-- </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--================ END TEAM =================-->

    <!--====== FOOTER PART START ======-->

    <footer id="footer" class="footer-area pt-120">
        <div class="container">
            <div class="subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="subscribe-content mt-45">
                            <h2 class="subscribe-title">Subscribe Our Newsletter 
                                <span>get reguler updates</span></h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="subscribe-form mt-50">
                            <form action="#">
                                <input type="text" placeholder="Enter eamil">
                                <button class="main-btn">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- subscribe area -->
            <div class="footer-widget pb-100">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="footer-about mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                            <a class="logo" href="#">
                                <img src="{{asset('assets/images/logo.png')}}" alt="logo">
                            </a>
                            <ul class="social">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                <li><a href="#"><i class="lni-instagram-filled"></i></a></li>
                                <li><a href="#"><i class="lni-github-original"></i></a></li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>

                    <!-- footer contact -->
                    <div class="col-lg-3 col-md-5 col-sm-5">
                        <div class="footer-contact mt-50 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                            <div class="footer-title">
                                <h4 class="title">Hubungi Kami</h4>
                            </div>
                            <ul class="contact">
                                <li>-</li>
                                <li>Bumblebee@gmail.com</li>
                                <li>www.bumblebee.com</li>
                                <li>Universitas Dinamika</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer widget -->
            <!-- copyright content -->
            <div class="footer-copyright">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright d-sm-flex justify-content-between">
                            <div class="copyright-content">
                                <p class="text">Designed and Developed by Bumblebee</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="particles-2"></div>
    </footer>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

    <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-"></div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->




    <!--====== Jquery js ======-->
    <script src="{{asset('assets/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/modernizr-3.7.1.min.js')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

    <!--====== Plugins js ======-->
    <script src="{{asset('assets/js/plugins.js')}}"></script>


    <!--====== Scrolling Nav js ======-->
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/js/scrolling-nav.js')}}"></script>

    <!--====== wow js ======-->
    <script src="{{asset('assets/js/wow.min.js')}}"></script>

    <!--====== Particles js ======-->
    <script src="{{asset('assets/js/particles.min.js')}}"></script>

    <!--====== Main js ======-->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>