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
Route::get("home","App\Http\Controllers\FlorisaController@home")->name("home");

Route::get("oNama","App\Http\Controllers\FlorisaController@oNama");

Route::get("kontakt","App\Http\Controllers\FlorisaController@kontakt")->name('kontakt');

Route::get("cvijetniAranzmani","App\Http\Controllers\FlorisaController@prikazi")->name('cvijetniAranzmani');
// Route::get("Aranzmani","App\Http\Controllers\FlorisaController@prikazi");

Route::get("kucnoCvijece","App\Http\Controllers\FlorisaController@prikaziKC")->name('kucnoCvijece');

Route::get("blog","App\Http\Controllers\FlorisaController@blog")->name('blog');

Route::get("/order/{id}","App\Http\Controllers\FlorisaController@prikaziOdabranuPonudu")->name("id");

Route::get("login","App\Http\Controllers\FlorisaController@login")->name('login');

Route::post("pristupiAdminOkruzenju","App\Http\Controllers\FlorisaController@pristupiAdminOkruzenju")->name("pristupiAdminOkruzenju");

Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin_view.adminHome');
        
    });

    Route::get("unesiPonudu","App\Http\Controllers\FlorisaController@unesiPonudu");

    Route::post("store","App\Http\Controllers\FlorisaController@store")->name("store");

    


});
