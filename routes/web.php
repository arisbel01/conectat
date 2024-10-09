<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaquetesController;



use App\Http\Controllers\PaqueteController;

Route::get('/agregar-paquete', [PaqueteController::class, 'create']);
Route::post('/agregar-paquete', [PaqueteController::class, 'store']);


Route::get('/', [PaquetesController::class, 'index']);

Route::get('/recuperar', function () {return view('password');});

Route::get('/registro', function () {return view('registro');});