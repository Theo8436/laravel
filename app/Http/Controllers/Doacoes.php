<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Doacoes extends Controller
{
    function doacoes(){
        return view('doacoes');
    }
}