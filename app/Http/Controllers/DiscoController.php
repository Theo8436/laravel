<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscoController extends Controller
{
    function disco(){ 
        return view('discos.disco');
    }


}
