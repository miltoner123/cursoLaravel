<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('usuarios', [App\Http\Controllers\UsuarioController::class,'index']);
Route::post('usuarios', [App\Http\Controllers\UsuarioController::class,'store']);
Route::get('usuarios/{id}', [App\Http\Controllers\UsuarioController::class,'show']);
Route::put('usuarios/{id}', [App\Http\Controllers\UsuarioController::class,'update']);
Route::delete('usuarios/{id}', [App\Http\Controllers\UsuarioController::class,'destroy']);


