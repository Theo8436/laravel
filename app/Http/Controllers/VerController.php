<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerController extends Controller
{
    function ver(){ 
        return view('see.ver');
    }


}