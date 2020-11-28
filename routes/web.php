<?php

use Illuminate\Support\Facades\Route;

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
    return view('korisnicki_view.home');
});

Route::get("oNama","App\Http\Controllers\FlorisaController@oNama");

Route::get("cvijetniAranzmani","App\Http\Controllers\FlorisaController@cvijetniAranzmani");

Route::get("kucnoCvijece","App\Http\Controllers\FlorisaController@kucnoCvijece");

Route::get("blog","App\Http\Controllers\FlorisaController@blog");
