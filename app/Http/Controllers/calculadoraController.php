<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calculadoraController extends Controller
{
    public function index()
    {
        return view('calculadora');
    }

    public function calcular(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $operacion = $request->input('operacion');
        $resultado = null;

        switch ($operacion) {
            case 'sumar':
                $resultado = $num1 + $num2;
                break;
            case 'restar':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicar':
                $resultado = $num1 * $num2;
                break;
            case 'dividir':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    $resultado = 'Error: División por cero';
                }
                break;
        }

        return view('calculadora', compact('resultado'));
    }
}
