<?php

namespace App\Http\Controllers;

use App\IncomeCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Tanggal,Nama, Total,Pemberi, Kategori, Metode
        $incomes = DB::table('incomes')
        ->select('incomes.id','incomes.date','incomes.name','incomes.total'
        ,'incomes.from','income_categories.name as category','methods.name as method')
        ->join('income_categories','incomes.income_categories_id','=','income_categories.id')
        ->join('methods','incomes.methods_id','=','methods.id')
        ->get();
        $data['incomes'] = $incomes;
        return view('pemasukan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('income_categories')->get();
        $methods = DB::table('methods')->get();

        $data['categories'] = $categories;
        $data['methods'] = $methods;
        return view('pemasukan.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $str = str_replace('.','',$request->get('total'));
        DB::table('incomes')->insert([
            'name' => $request->get('name'),
            'date' => $request->get('date'),
            'total' => $str,
            'from' => $request->get('from'),
            'income_categories_id' => $request->get('category_id'),
            'methods_id' => $request->get('method_id'),
            'description' => $request->get('description'),
        ]);

        return redirect('/pemasukan');
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
}
