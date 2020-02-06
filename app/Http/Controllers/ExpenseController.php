<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Tanggal, Nama, Total, Penerima, Kategori, Metode
        $expenses = DB::table('expenses')
            ->select('expenses.id', 'expenses.date', 'expenses.name as name', 
            'expenses.total', 'expenses.to', 'expense_categories.name as category', 'methods.name as method')
            ->join('expense_categories', 'expenses.expense_categories_id', '=', 'expense_categories.id')
            ->join('methods', 'expenses.methods_id', '=', 'methods.id')
            ->get();

        $data['expenses'] = $expenses;
        return view('pengeluaran.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = DB::table('expense_categories')->get();
        $methods = DB::table('methods')->get();

        $data['categories'] = $categories;
        $data['methods'] = $methods;
        return view('pengeluaran.create', $data);
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
        DB::table('expenses')->insert([
            'name' => $request->get('name'),
            'date' => $request->get('date'),
            'total' => $str,
            'to' => $request->get('to'),
            'expense_categories_id' => $request->get('category_id'),
            'methods_id' => $request->get('method_id'),
            'description' => $request->get('description'),
        ]);

        return redirect('/pengeluaran');
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
