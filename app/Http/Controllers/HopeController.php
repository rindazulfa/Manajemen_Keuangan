<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\CustomClass\hitung;
use App\Hope;

class HopeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('danaimpian.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return redirect('/danaimpian');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function fetch(Request $request)
    {
        if($request->get('date')){
          $date = $request->get('data');
          $date = strtotime($date);
          $year1 = date('Y',$date);
          $year2 = date('Y');
          $month1 = date('m',$date);
          $month2 = date('m');
          $diff = (($year1 - $year2) * 12) + ($month1 - $month2);
          echo $diff;

        }
    }

    public function hitung(Request $request)
    {
        if($request->get('hitung')){
            $bulan = $request->get('bulan');
            $bulan = $bulan/12;
            $biaya = str_replace('.','',$request->get('biaya'));
            $hitung = new hitung;
            $hitungdatang = $hitung->futureku($bulan,$biaya,'future');
            $hitung = $hitungdatang/$request->get('bulan');
            $hitung = round($hitung);
            $hitung = intval($hitung);
            $rupiah = "Rp ".number_format($hitung,2,',','.');
            $biaya = "Rp ".number_format($biaya,2,',','.');
            $datang = round($hitungdatang);
            $datang = "Rp ".number_format($datang,2,',','.');
            $hasil =   array('bulan' => $request->get('bulan'),
                            'biaya' => $biaya,
                            'inflasi' => '3%',
                            'perbulan' => $rupiah,
                            'nama' => $request->get('nama'),
                            'biayadatang' => $datang
                     );
            return $hasil;


        }
    }


    public function savedata(Request $request)
    {
        $plan = new Hope;
        $plan->name = $request->get('nama');
        $plan->cost = $request->get('biaya');
        $plan->month = $request->get('bulan');
        $plan->inflation = $request->get('inflasi');
        $plan->per_month = $request->get('perbulan');
        $plan->upcoming_costs = $request->get('biayadatang');
        $plan->save();
    }
}
