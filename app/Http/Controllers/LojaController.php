<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LojaController extends Controller
{
    function home(){ 
        return view('loja.home');
    }

    function disco(){ 
        return view('discos.disco');
    }

    function sobre(){ 
        return view('about.sobre');
        
    }

}
