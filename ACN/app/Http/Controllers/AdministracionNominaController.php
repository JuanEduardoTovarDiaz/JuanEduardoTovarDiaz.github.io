<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministracionNominaController extends Controller
{
    public function administracionNomina(){
        return view('administracion_nomina.administracion_nomina');
    }
}
