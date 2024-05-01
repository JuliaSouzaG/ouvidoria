<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ElogiosController extends Controller
{
    public function elogios(){
        return view('site.elogios');
    }
}
