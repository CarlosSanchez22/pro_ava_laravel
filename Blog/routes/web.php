<?php

use Illuminate\Support\Facades\Route;

Route::get('/User', function () {
    return "BIENVENIDO Carlos";
});


Route::get('/User/{nombre}/{apellido?}', function (string $nombre, string $apellido=null) {
    return "BIENVENIDO {$nombre} {$apellido}";
    
})->whereAlpha('nombre')->whereAlpha('apellido');


Route::get('/User/{num1}/{num2}', function (string $num1, string $num2) {
    $suma = $num1 + $num2;
    return "La suma total es: {$suma} ";

})->whereAlphaNumeric('num1')->whereAlphaNumeric('num2');