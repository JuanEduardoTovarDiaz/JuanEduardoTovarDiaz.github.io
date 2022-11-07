<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsesoriaFiscalController extends Controller
{
    public function asesoriaFiscal(){
        return view('asesoria_fiscal.asesoria_fiscal');
    }
}
