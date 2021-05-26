<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentController;
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
Route::resource('/Student', studentController::class);
//Route::get('/Student', function () {
  //  return view('students.index');
//});
//Route::get('/','App\Http\Controllers\studentController');
