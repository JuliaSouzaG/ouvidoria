<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DenunciasController extends Controller
{
    public function denuncias(){
        return view('site.denuncias');
    }
}
