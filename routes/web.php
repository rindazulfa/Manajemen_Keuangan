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
    return view('welcome');
    //master- nama file
});
Route::get('/login','AuthController@login')->name('login.index');
Route::post('/login','AuthController@postLogin')->name('login');
Route::get('/register','AuthController@register')->name('register.index');
Route::post('/register','AuthController@postRegister')->name('register');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard/chart-income', 'DashboardController@chartIncome');
    Route::get('/dashboard/chart-expense', 'DashboardController@chartExpense');
    Route::post('/danaimpian/fetch','HopeController@fetch');
    Route::post('/danaimpian/hitung','HopeController@hitung');
    Route::post('/danaimpian/save','HopeController@savedata');
    Route::resource('dashboard', 'DashboardController');
    Route::resource('pemasukan', 'IncomeController');
    Route::resource('pengeluaran', 'ExpenseController');
    Route::resource('danaimpian', 'HopeController');
    Route::get('/logout','AuthController@logout')->name('logout');

});
