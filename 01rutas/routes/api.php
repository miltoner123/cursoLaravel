<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculoController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/test',function(){
    return 'Pagina de testeo';
});
Route::get('/clientes',[CalculoController::class, 'clientes']);
Route::resource('/user',  UserController::class);

