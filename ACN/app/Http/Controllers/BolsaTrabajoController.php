<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BolsaTrabajoController extends Controller
{
    public function bolsaTrabajo(){
        return view('bolsa_trabajo.bolsa_trabajo');
    }
}
