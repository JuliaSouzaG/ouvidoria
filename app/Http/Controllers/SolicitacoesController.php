<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolicitacoesController extends Controller
{
    public function solicitacoes(){
        return view('site.solicitacoes');
    }
}
