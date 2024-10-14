<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaquetesController;
use App\Http\Controllers\userController;
use App\Http\Controllers\PaqueteController;

Route::get('/agregar-paquete', [PaqueteController::class, 'create']);
Route::post('/agregar-paquete', [PaqueteController::class, 'store']);
Route::get('/editar-paquete/{id}', [PaqueteController::class, 'edit'])->name('paquete.edit');
Route::put('/editar-paquete/{id}', [PaqueteController::class, 'update'])->name('paquete.update');
Route::delete('/paquete/{id}', [PaqueteController::class, 'destroy'])->name('paquete.destroy');

Route::get('/', [PaquetesController::class, 'index'])->name('paquete.index');

Route::get('/user', [userController::class, 'showPackages'])->name('mostrar.paquetes');

Route::get('/recuperar', function () {return view('password');});

Route::get('/registro', function () {return view('registro');});
Route::get('/login', function () {return view('login');});
Route::get('/datos', function () {return view('datos');});
