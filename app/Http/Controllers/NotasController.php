<?php

namespace App\Http\Controllers;

use App\Notas;
use Illuminate\Http\Request;

class NotasController extends Controller
{
    //
    public function index(){
        $notas = Notas::all();
        dd($notas[0]->nombre);


        $lista =[];
        $nombres = ["Aleshna Adriazola",
            "Francisca Alvarado",
            "Oscar Arancibia",
            "Julian Araya",
            "Katalina Araya",
            "Anays Avalos",
            "Belen Azocar",
            "Antonella Bravo",
            "Ignacio Campillay",
            "Antonella Alvarez",
            "Bastian Cerda",
            "Aieleth Cortes",
            "Ignacio Cortez",
            "Bastian Diaz",
            "Laura Estrada",
            "Johan Facuse",
            "Alejandro Ferrer",
            "Valentina Figueroa",
            "Valentina Formas",
            "Sofia Fuentes",
            "Catalina Galdames",
            "Alexander Guzman",
            "Constanza Lillo",
            "Francisco Mancilla",
            "Bryan Maraboli",
            "Trinidad Menares",
            "Matias Millalonco",
            "Belen Olave",
            "Bastian Olguin",
            "Danae Olivares",
            "Ignacia Ortega",
            "Hellet Ortiz",
            "Nicolas Pastenes",
            "Francisco Perez",
            "Sofia Pinto",
            "Allyson Puelles",
            "Vicente Ramos",
            "Vicmara Rios",
            "Vicente Rojas",
            "Ivan Saldivar",
            "Lyan Salfate",
            "Matias Sanchez",
            "Constanza Santibañez",
            "Maria Ignacia Thompson",
            "Dylan Vargas",
            "Catalina Viera",
            "Naomi Zuñiga",
        ];
        $notas = [3.2,
            3.4,
            4.0,
            3.3,
            3.1,
            3.2,
            4.0,
            3.4,
            4.3,
            3.1,
            0.0,
            6.0,
            3.4,
            0.0,
            5.3,
            4.0,
            3.1,
            4.0,
            3.2,
            5.2,
            3.4,
            3.4,
            0.0,
            3.7,
            4.5,
            3.4,
            3.2,
            2.6,
            2.5,
            3.0,
            3.0,
            4.0,
            3.2,
            3.7,
            3.2,
            2.9,
            6.2,
            4.9,
            3.3,
            2.9,
            3.1,
            5.4,
            4.0,
            2.6,
            2.9,
            4.0,
            3.4,
        ];
        for ($i = 1 ; $i < 48; $i++){
            $lista[$i]=$i;
        }


        return view('notas', compact('lista','nombres','notas'));
    }
}
