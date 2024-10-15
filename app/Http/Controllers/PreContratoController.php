<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Cliente;
use App\Mail\VerificacionCodigo;
use Illuminate\Support\Str;

class PreContratoController extends Controller
{
    public function mostrarFormulario()
    {
        return view('precontrato.formulario');
    }

    public function enviarCodigo(Request $request)
    {
        $validatedData = $request->validate([
            'codigoPostal' => 'required|numeric',
                     
            'correo' => 'required|email',
            // Validar el resto de los campos
        ]);

        // Generar código aleatorio
        $codigoVerificacion = Str::random(6);

        // Enviar correo con el código
        Mail::to($request->correo)->send(new VerificacionCodigo($codigoVerificacion));

        // Guardar los datos temporalmente en la sesión
        session(['codigo_verificacion' => $codigoVerificacion, 'datos_cliente' => $validatedData]);

        return redirect()->route('verificarCodigo');
    }

    public function mostrarVerificacion()
    {
        return view('verificar-Codigo');
    }

    public function verificarCodigo(Request $request)
    {
        $request->validate([
            'codigo' => 'required',
        ]);

        if ($request->codigo === session('codigo_verificacion')) {
            // Crear un nuevo cliente en la base de datos
            Cliente::create(session('datos_cliente'));

            // Limpiar sesión
            session()->forget(['codigo_verificacion', 'datos_cliente']);

            return redirect()->route('precontratoExitoso');
        } else {
            return back()->withErrors(['codigo' => 'El código ingresado es incorrecto.']);
        }
    }
}
