<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SobreController extends Controller
{
    function sobre(){ 
        return view('about.sobre');
    }


}
