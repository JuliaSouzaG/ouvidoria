<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SugestoesController extends Controller
{
    public function sugestoes(){
        return view('site.sugestoes');
    }
}
