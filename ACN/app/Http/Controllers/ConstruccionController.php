<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConstruccionController extends Controller
{
    public function paginaConstruccion(){
        return view('construccion.construccion');
    }
}
