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
        $expenses = DB::table('expenses')->get();
        // $category = DB::table('expense_categories')->where('id',"=", $expenses->expense_categories_id)->pluck('name')->first();
        // $data['expenses'] = $expenses;
        $arr = [];

        for ($i=0; $i < count($expenses); $i++) { 
            $category = DB::table('expense_categories')->where('id',"=", $expenses[$i]->expense_categories_id)->pluck('name')->first();
            $method = DB::table('methods')->where('id',"=", $expenses[$i]->methods_id)->pluck('name')->first();
            $x['date'] = $expenses[$i]->date;
            $x['name'] = $expenses[$i]->name;
            $x['total'] = $expenses[$i]->total;
            $x['to'] = $expenses[$i]->to;
            $x['category'] = $category;
            // $x['method_id'] = $method;
           

            array_push($arr, $x);
        }
        $data['expenses'] = $arr;



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
        DB::table('expenses')->insert([
            'name' => $request->get('name'),
            'date' => $request->get('date'),
            'total' => $request->get('total'),
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
