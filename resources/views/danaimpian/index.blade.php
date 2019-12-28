@extends('master')
@section('content')
<section class="feature_area section_gap_top">
    <div class="container">
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic form -->
            <!-- ============================================================== -->
            <div class="col-md-12 col-xl-12 col-lg-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Rencana Mendatang</h5>
                    <!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12"> -->
                    <div class="card-body">
                        <form action="#" id="basicform" data-parsley-validate="">
                            <div class="row">
                                <!-- Nama Rencana -->
                                <div class="form-group col-sm-6 col-xl-6 col-lg-6 col-md-6 col-6">
                                    <label for="inputUserName">Nama Rencana</label>
                                    <input id="inputUserName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Masukkan Rencanamu" autocomplete="off" class="form-control">
                                </div>

                                  <!-- Target Rencana-->
                                  <div class="form-group col-sm-6 col-xl-6 col-lg-6 col-md-6 col-6">
                                    <label for="inputUserName">Target Rencana</label>
                                        <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                            <input type="month" class="form-control datetimepicker-input" data-target="#datetimepicker4" />
                                            <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <!-- Biaya -->
                                <div class="form-group col-sm-6 col-xl-6 col-lg-6 col-md-6 col-6">
                                    <label for="inputEmail">Biaya</label>
                                    <input id="inputEmail" type="text" name="email" data-parsley-trigger="change" required="" placeholder="Masukkan Biaya yang dibutuhkan" autocomplete="off" class="form-control">
                                </div>
                                <!-- Kenaikan Harga -->
                                <div class="form-group col-sm-6 col-xl-6 col-lg-6 col-md-6 col-6">
                                    <label for="inputPassword">Tercapai Dalam</label>
                                    <input id="inputPassword" type="text"  required="" disabled class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <!-- Keterangan -->
                                <div class="form-group col-sm-6 col-xl-6 col-lg-6 col-md-6 col-6">
                                    <label for="inputRepeatPassword">Inflasi</label>
                                    <input id="inputRepeatPassword" disabled data-parsley-equalto="#inputPassword" type="text" required="" value="6%"  class="form-control">
                                </div>

                            </div>
                            <div  style=" display: flex; align-items: center; justify-content: center;">
                                <button id="hitung" type="button" class="btn btn-primary hitung" data-id="hitung">Hitung</button>
                             </div>
                        </form>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic -->
            <!-- ============================================================== -->
        </div>
    </div>
</section>
@endsection
