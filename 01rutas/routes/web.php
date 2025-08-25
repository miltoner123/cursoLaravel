<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculoController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
return 'Hola mundo';
});

Route::get('/ruta',[CalculoController::class, 'tabla9']);
