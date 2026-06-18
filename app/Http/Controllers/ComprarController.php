<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComprarController extends Controller
{
    function comprar(){ 
        return view('buy.comprar');
    }


}
