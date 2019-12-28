@extends('master')
@section('content')
<div class="row">
    <!-- ============================================================== -->
    <!-- basic form -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <h5 class="card-header">Rencana Mendatang</h5>
            <!-- <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12"> -->
            <div class="card-body">
                <form action="#" id="basicform" data-parsley-validate="">
                    <div class="row">
                        <!-- Photo -->
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="">Photo</label>
                                <input type="file" class="form-control-file" name="photos">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="inputUserName">Nama Rencana</label>
                                <input id="inputUserName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Masukkan Rencanamu" autocomplete="off" class="form-control">
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label for="inputEmail">Biaya</label>
                                <input id="inputEmail" type="text" name="email" data-parsley-trigger="change" required="" placeholder="Masukkan Biaya yang dibutuhkan" autocomplete="off" class="form-control">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="form row"> -->
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <label for="inputPassword">Kenaikan Harga</label>
                            <input id="inputPassword" type="password" placeholder="Password" required="" class="form-control">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <label for="inputRepeatPassword">Target Rencana</label>
                            <input id="inputRepeatPassword" data-parsley-equalto="#inputPassword" type="password" required="" placeholder="Masukkan Target Waktu Rencana" class="form-control">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="form-group">
                            <label for="inputRepeatPassword">Keterangan</label>
                            <input id="inputRepeatPassword" data-parsley-equalto="#inputPassword" type="password" required="" placeholder="Masukkan Keterangan" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12>
                                <p class=" text-right">
                            <button type="submit" class="btn btn-space btn-primary">Submit</button>
                            <button class="btn btn-space btn-secondary">Cancel</button>
                            </p>
                        </div>
                    </div>

                    <!-- </div> -->
                </form>
            </div>
            <!-- </div> -->
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end basic form -->
    <!-- ============================================================== -->
</div>

@endsection