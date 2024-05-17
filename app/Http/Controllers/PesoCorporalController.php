<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PesoCorporalController extends Controller
{
    public function pesoCorporal()
    {
        return view('peso-corporal');
    }

    public function calcularImc(Request $request)
    {
        $peso = $request->input('peso');
        $altura = $request->input('altura');
        $imc = null;

        if ($peso && $altura) {
            $imc = $peso / ($altura * $altura);
        }

        return view('peso-corporal', compact('imc'));
    }

}
