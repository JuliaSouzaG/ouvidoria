<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReclamacoesController extends Controller
{
    public function reclamacoes(){
        return view('site.reclamacoes');
    }
}
