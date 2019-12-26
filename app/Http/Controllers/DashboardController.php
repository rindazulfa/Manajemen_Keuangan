<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Income;
use Illuminate\Http\Response;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $incomes = DB::table('incomes')->select('total')->sum('total');
        $expenses = DB::table('expenses')->select('total')->sum('total');
        $data['incomes'] = $incomes;
        // $data['incomes'] = $incomes1;
        $data['expenses'] = $expenses;
        // $data['expenses'] = $expenses1;
        $income = Income::select('total')->get();




        // Nashir
        $incomes_all = DB::table('incomes')->get();
        $expenses_all = DB::table('expenses')->get();

        $arr = [];
        
        for ($i=0; $i < count($incomes_all); $i++) { 
            $category = DB::table('income_categories')->where('id',"=", $incomes_all[$i]->income_categories_id)->pluck('name')->first();
            $x['category'] = $category;
            $x['date'] = $incomes_all[$i]->date;    
            $x['name'] = $incomes_all[$i]->name;
            $x['total'] = $incomes_all[$i]->total;
            $x['type'] = 'Income';

            array_push($arr, $x);
        }
        
        for ($i=0; $i < count($expenses_all); $i++) { 
            $category = DB::table('expense_categories')->where('id',"=", $expenses_all[$i]->expense_categories_id)->pluck('name')->first();
            $x['category'] = $category;
            $x['date'] = $expenses_all[$i]->date;
            $x['name'] = $expenses_all[$i]->name;
            $x['total'] = $expenses_all[$i]->total;
            $x['type'] = 'Expense';

            array_push($arr, $x);
        }

        $data['transaction'] = $arr;
        



        $a = [];
        foreach($income as $incomes){
            $a[] = $incomes->total;
        }
        return view('dashboard.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function chartIncome()
    {
        $date = DB::table('incomes')->select('date','total')->orderBy('date','ASC')->get();

        $data['labels'] = $date;
        // $data = [];
        // foreach($date as $row){
        //     $data[] = $row->date;
        // }

        return response()->json($data);
    }

    public function chartExpense()
    {
        $date = DB::table('expenses')->select('date','total')->orderBy('date','ASC')->get();
        $date2 = DB::table('incomes')->select('date','total')->orderBy('date','ASC')->get();
        // $data['labels'] = $date;
        return response()->json(['labels' => $date,'labels2'=>$date2]);
    }


}
