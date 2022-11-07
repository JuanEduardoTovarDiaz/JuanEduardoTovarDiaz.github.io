<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContabilidadGubernamentalController extends Controller
{
    public function contabilidadGubernamental(){
        return view('contabilidad_gubernamental.contabilidad_gubernamental');
    }
}
