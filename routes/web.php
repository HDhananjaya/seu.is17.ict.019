<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\exformcontroller;
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

Route::get('/', function () {
    return view('welcome');
});

// EXAM------------------------------------------------------\

Route::view('examform','exform');
//Route::post("exload", [exformcontroller::class,'getdata']);

Route::post('exload', [exformcontroller::class,'addData']);


Route::get('datalist', [exformcontroller::class,'show']);