<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComprasController extends Controller
{
    function compras(){ 
        return view('btms.compras');
    }


}