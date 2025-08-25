<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculoController extends Controller
{
    Function tabla9(){
        $numero=9;
        for ($i=1; $i<=10; $i++){
            echo "$numero * $i =".($numero*$i). "<br>";        
        }
    }
    function clientes(){
        $clientes=[
            ['nombre'=>'Juan', 'Edad'=>25],
            ['nombre'=>'Luan', 'Edad'=>35],
            ['nombre'=>'Juana', 'Edad'=>52]
        ];
         return $clientes;      
        }
       
    }

