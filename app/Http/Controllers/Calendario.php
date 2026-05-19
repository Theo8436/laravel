<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Calendario extends Controller
{
    function calendario(){
        return view('calendario');
    }
}
