<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsesoriaFinancieraController extends Controller
{
    public function asesoriaFinanciera(){
        return view('asesoria_financiera.asesoria_financiera');
    }
}
