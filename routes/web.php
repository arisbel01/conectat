<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaquetesController;

Route::get('/', [PaquetesController::class, 'index']);
