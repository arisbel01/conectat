<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NombresPaquetes;

class PaquetesController extends Controller
{
    public function index()
    {
        // Traemos los paquetes con sus respectivas promociones
        $paquetes = NombresPaquetes::with('promocion')->get();

        return view('index', compact('paquetes'));
    }

   
}
