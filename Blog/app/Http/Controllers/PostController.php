<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function nomApe(string $nombre, string $apellido = null)
    {
        return "BIENVENIDO {$nombre} {$apellido}";
    }

    public function suma(string $num1, string $num2)
    {
        $suma = $num1 + $num2;
        return "La suma total es: {$suma} ";
    }

    public function resta(string $num1, string $num2)
    {
        $resta = $num1 - $num2;
        return "La resta total es: {$resta} ";
    }
}
