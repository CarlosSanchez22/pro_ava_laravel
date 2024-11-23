<?php

use Illuminate\Support\Facades\Route;

//Con esto especificamos que vamos a utilizar este controlador en el archivo
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;

//Bienvenida
Route::get('/User', [HomeController::class, 'index']);

//Nombre y Apellido
Route::get('/User/{nombre}/{apellido?}', [PostController::class,'nomApe']
)->whereAlpha('nombre')->whereAlpha('apellido');

//Suma
Route::get('/User/{num1}/{num2}', [PostController::class,'suma']
)->whereAlphaNumeric('num1')->whereAlphaNumeric('num2');

//Resta
Route::get('/User/Resta/{num1}/{num2}', [PostController::class,'resta']
)->whereAlphaNumeric('num1')->whereAlphaNumeric('num2');