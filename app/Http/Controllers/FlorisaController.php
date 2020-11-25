<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlorisaController extends Controller
{
    public function home(){
        return view("korisnicki_view.home");
        }
}
