<?php

namespace App\Http\Controllers;

use App\Notas;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    //
    public function index(){
        $lista = [1,2,3];
        $nombres = ["n1","n2","n3"];
        $notas = [1.0,1.2,1.3];


        return view('notas', compact('lista','nombres','notas'));
    }
}
