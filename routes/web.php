<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/dashboard');
    //master- nama file
});

Route::get('/dashboard/chart-income', 'DashboardController@chartIncome');
Route::get('/dashboard/chart-expense', 'DashboardController@chartExpense');
Route::resource('dashboard', 'DashboardController');
Route::resource('pemasukan', 'IncomeController');
Route::resource('pengeluaran', 'ExpenseController');
Route::resource('danaimpian', 'HopeController');