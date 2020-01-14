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
                                    <label for="namalifeplan">Nama Rencana</label>
                                    <input id="namalifeplan" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Masukkan Rencanamu" autocomplete="off" class="form-control">
                                </div>

                                  <!-- Target Rencana-->
                                  <div class="form-group col-sm-6 col-xl-6 col-lg-6 col-md-6 col-6">
                                    <label for="inputUserName">Target Rencana</label>
                                        <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                            <input type="month" id="month" class="form-control datetimepicker-input" data-target="#datetimepicker4" />
                                            <!-- <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="far fa-calendar-alt"></i></div>
                                            </div> -->
                                        </div>
                                    </div>
                            </div>
                            <div class="row">
                                <!-- Biaya -->
                                <div class="form-group col-sm-6 col-xl-6 col-lg-6 col-md-6 col-6">
                                    <label for="biaya">Biaya</label>
                                    <input id="biaya" type="text" name="email" data-parsley-trigger="change" required="" placeholder="Masukkan Biaya yang dibutuhkan" autocomplete="off" class="form-control">
                                </div>
                                <!-- Kenaikan Harga -->
                                <div class="form-group col-sm-6 col-xl-6 col-lg-6 col-md-6 col-6">
                                    <label for="tercapai">Tercapai Dalam</label>
                                    <input id="tercapai" type="text"  disabled class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <!-- Keterangan -->
                                <div class="form-group col-sm-6 col-xl-6 col-lg-6 col-md-6 col-6">
                                    <label for="inflasi">Inflasi</label>
                                    <input id="inflasi" disabled data-parsley-equalto="#inputPassword" type="text"  value="6%"  class="form-control">
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <form action="">
            <table class="profit-loss report-table table" id="date-profit-lost">
                <thead class="report-header">
                    <tr>
                        <th colspan="2">
                    Rencana Mendatang
                        </th>
                    <th></th>

                    </tr>
                </thead>
                <tbody>
                        <tr>
                              <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                                  Nama Rencana
                                </td>
                                <td class="report-subtotal text-right" id="assets-type-1-total-data">
                                </td>
                                <td class="border-top-thin" id="hasilnama" name="hasilnama" style="padding-left:80px;">

                                </td>
                         </tr>
                           <tr>
                                <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                                    Biaya saat ini
                                  </td>
                                  <td class="report-subtotal text-right" id="assets-type-1-total-data">
                                  </td>
                                  <td class="border-top-thin" id="hasilbiaya" style="padding-left:80px;">

                                  </td>
                           </tr>
                           <tr>
                                <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                                    Tercapai Dalam
                                  </td>
                                  <td class="report-subtotal text-right" id="assets-type-1-total-data">
                                  </td>
                                  <td class="border-top-thin" id="hasiltercapai" style="padding-left:80px;">

                                  </td>
                           </tr>

                           <tr>
                                <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                                   Inflasi
                                  </td>
                                  <td class="report-subtotal text-right" id="assets-type-1-total-data">
                                  </td>
                                  <td class="border-top-thin" id="hasilinflasi" style="padding-left:80px;">

                                  </td>
                           </tr>
                           <tr>
                                <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                               Biaya yang akan datang
                                </td>
                                  <td class="report-subtotal text-right" id="assets-type-1-total-data">
                                  </td>
                                  <td class="border-top-thin" id="hasildatang" style="padding-left:80px;">

                                  </td>
                           </tr>
                           <tr>
                                <td class="report-subtotal text-left regular-text data-col-half" colspan="2">
                                  Perkiraan perbulan
                                  </td>
                                  <td class="report-subtotal text-right" id="assets-type-1-total-data">
                                  </td>
                                  <td class="border-top-thin" id="perbulan" style="padding-left:80px;">

                                  </td>
                           </tr>
                </tbody>
            </table>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="simpanlife">Simpan</button>
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
$(document).ready(function(){
    var data;
    var hasil;
    var bulan;
    $('#hitung').on('click', function(){
                var month = $('#month').val();
                var biaya = $('#biaya').val();
                var nama = $('#namalifeplan').val();
                if(nama == ''){
                    swal("Gagal", "Isi form nama", "error");
                }else if(month == ''){
                    swal("Gagal", "Pilih bulan dan tahun", "error");
                }else  if(biaya == ''){
                    swal("Gagal", "Isi form biaya", "error");
                }
                else{
                    ajax();
                $.ajax({
                    url: '/danaimpian/hitung',
                    method: 'POST',
                    data: {
                        'hitung':1,
                        'nama':nama,
                        'biaya':biaya,
                        'bulan':bulan,
                    },
                    success:function(data){
                        hasil = data;
                        $('#exampleModal').modal('show');
                        $('#hasilnama').text(data['nama']);
                        $('#hasilbiaya').text(data['biaya']);
                        $('#hasiltercapai').text(data['bulan']+' bulan');
                        $('#hasilinflasi').text(data['inflasi']);
                        $('#hasildatang').text(data['biayadatang']);
                        $('#perbulan').text(data['perbulan']);
                        $('#basicform')[0].reset();


                    }
                });
                }

       });

    $('#month').on('change', function(){
            data = $(this).val();
                ajax();
                $.ajax({
                    url: '/danaimpian/fetch',
                    method: 'POST',
                    data:{'date': 1,
                        'data':data
                    },
                    success:function(response){
                        bulan = response;
                       $('#tercapai').val(response+' bulan');
                    }
                });
       });

       $( '#biaya' ).mask('000.000.000', {reverse: true});

       function ajax()
       {
        $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
       }

         $('#simpanlife').on('click', function() {

                ajax();
                $.ajax({
                    url: '/danaimpian/save',
                    method: 'POST',
                    data: hasil,
                    success:function(data){
                        $('#exampleModal').modal('hide');
                        swal("Success", "Rencana mendatang Berhasil di Simpan", "success");
                    }
                });
       });
});
</script>

@endpush
