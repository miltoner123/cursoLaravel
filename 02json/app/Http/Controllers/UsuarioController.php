<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    private $usuarios=[
        ['id'=>1,'name'=>'Usuario1'],
        ['id'=>2,'name'=>'Usuario2'],
        ['id'=>3,'name'=>'Usuario3'],
    ];
    public function index()
    {
        return response()->json($this->usuarios);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $nuevousuario=[
            'id'=>count($this->usuarios)+1,
            'name'=> $request->input('name')
         ];
         $this->usuarios[]=$nuevousuario;
         return response()->json($nuevousuario,201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario=collect($this->usuarios)->firstWhere('id',$id);
        if ($usuario){
            return response()->json($usuario);
        }
        return response()->json(['message'=>'Usuario no encontrado'], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
