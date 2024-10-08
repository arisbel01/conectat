<?php

namespace App\Http\Controllers;

use App\Models\NombresPaquetes;  // Modelo de los paquetes
use Illuminate\Http\Request;

class PaquetesController extends Controller
{
    public function index() {
        // Obtener todos los paquetes de la tabla 'nombres_paquetes'
        $paquetes = NombresPaquetes::all();

        // Retornar la vista 'index' y pasarle los datos de los paquetes
        return view('index', compact('paquetes'));
    }
}
