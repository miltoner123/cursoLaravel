<?php

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $usuarios=[
        ['name'=>'Adimer',
        'profesiones'=>['desarrollador']],
    ['name'=>'Maria'
    ],
        ['name'=>'Adir',
        'profesiones'=>['analista']
],
    ];
   $num1=10;
   $num2=20;
    return view('greeting', ['name'=>'Adimer','usuarios'=>$usuarios, 'num1'=>$num1,'num2'=>$num2]);
});
