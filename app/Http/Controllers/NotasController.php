<?php

namespace App\Http\Controllers;

use App\Notas;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    //
    public function index(){
        $notas =Notas::all();


        return view('notas', compact('notas'));
    }
}
