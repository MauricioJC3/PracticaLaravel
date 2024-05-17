<?php

use App\Http\Controllers\calculadoraController;
use App\Http\Controllers\PesoCorporalController;
use App\Http\Controllers\textoController;
use Illuminate\Support\Facades\Route;

route::get('/', [calculadoraController::class, 'index']);
route::post('/calcular', [calculadoraController::class, 'calcular']);

route::get('/texto',[textoController::class, 'show']);

route::get('/peso-corporal', [PesoCorporalController::class, 'pesoCorporal']);
route::post('calcular-imc', [PesoCorporalController::class, 'calcularImc']);

