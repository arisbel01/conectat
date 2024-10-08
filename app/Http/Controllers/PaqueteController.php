<?php

namespace App\Http\Controllers;

use App\Models\NombrePaquete;
use Illuminate\Http\Request;
use App\Models\PromocionPaquete;


class PaqueteController extends Controller
{
    public function create()
    {
        $promociones = PromocionPaquete::all();
        return view('agregar-paquete', compact('promociones'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre_paquete' => 'required|max:50',
            'precio' => 'required|integer',
            'caracteristicas_paquete' => 'required|max:150',
            'velocidad_paquete' => 'required|max:30',
            'fk_promocion' => 'required|exists:promociones_paquetes,id_promocion'
        ]);

        NombrePaquete::create($validated);
        return redirect('/agregar-paquete')->with('success', 'Paquete agregado exitosamente');
    }
}


