<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\PaqueteController;




Route::get('/agregar-paquete', [PaqueteController::class, 'create'])->name('paquetes.create');
Route::post('/agregar-paquete', [PaqueteController::class, 'store'])->name('paquetes.store');
