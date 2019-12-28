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
                            <div class="form-row mt-2">
                                <!-- Photo -->
                                <div class="form-group col-sm-6 col-xl-6 col-lg-6 col-md-6 col-6">
                                    <label for="">Photo</label>
                                    <input type="file" class="form-control-file" name="photos">
                                </div>

                                <!-- Nama Rencana -->
                                <div class="form-group col-sm-6 col-xl-6 col-lg-6 col-md-6 col-6">
                                    <label for="inputUserName">Nama Rencana</label>
                                    <input id="inputUserName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Masukkan Rencanamu" autocomplete="off" class="form-control">
                                </div>
                            </div>
                            <div class="form row">
                                <!-- Biaya -->
                                <div class="form-group col-sm-6 col-xl-6 col-lg-6 col-md-6 col-6">
                                    <label for="inputEmail">Biaya</label>
                                    <input id="inputEmail" type="text" name="email" data-parsley-trigger="change" required="" placeholder="Masukkan Biaya yang dibutuhkan" autocomplete="off" class="form-control">
                                </div>
                                <!-- Kenaikan Harga -->
                                <div class="form-group col-sm-6 col-xl-6 col-lg-6 col-md-6 col-6">
                                    <label for="inputPassword">Kenaikan Harga</label>
                                    <input id="inputPassword" type="password" placeholder="Password" required="" class="form-control">
                                </div>
                            </div>
                            <div class="form row">
                                <!-- Target Rencana-->
                                <div class="form-group col-sm-6 col-xl-6 col-lg-6 col-md-6 col-6">
                                <label for="inputUserName">Target Rencana</label>
                                    <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4" />
                                        <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Keterangan -->
                                <div class="form-group col-sm-6 col-xl-6 col-lg-6 col-md-6 col-6">
                                    <label for="inputRepeatPassword">Keterangan</label>
                                    <input id="inputRepeatPassword" data-parsley-equalto="#inputPassword" type="password" required="" placeholder="Masukkan Keterangan" class="form-control">
                                </div>

                                <div class="col-sm-6 col-xl-6 col-lg-6 col-md-6 col-6 d-flex">
                                    <p class=" text-right">
                                        <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                        <button class="btn btn-space btn-secondary">Cancel</button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end basic form -->
            <!-- ============================================================== -->
        </div>
    </div>
</section>
@endsection