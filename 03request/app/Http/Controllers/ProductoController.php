<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreProductoRequest;

class ProductoController extends Controller{
    function store(StoreProductoRequest $request){
    //     $validation = $request->validate([
    //          'nombre' => 'required|string|max:15',
    //         'precio' => 'required|numeric|min:0',

    //   ]);
    echo "soy guardar";
    }
}
