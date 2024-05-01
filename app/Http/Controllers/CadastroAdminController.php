<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroAdminController extends Controller
{
    public function cadastro(){
        return view('site.cadastroAdmin');
    }
}
