<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlorisaController extends Controller
{
    public function home(){
        return view("korisnicki_view.home");
        }

     public function oNama(){
         return view("korisnicki_view.o_nama");
        }

    public function cvijetniAranzmani(){
        return view("korisnicki_view.cvijetni_aranzmani");
         }
    public function kucnoCvijece(){
        return view("korisnicki_view.kucno_cvijece");
         }

    public function blog(){
        return view("korisnicki_view.blog");
        }    

}
