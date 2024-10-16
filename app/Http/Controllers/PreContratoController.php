<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Cliente;
use App\Mail\VerificacionCodigo;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB; // Agrega esta línea

class PreContratoController extends Controller
{
    public function mostrarFormulario()
    {
        return view('datos');
    }

    public function enviarCodigo(Request $request)
    {
        // Validar los datos del formulario
        $validatedData = $request->validate([
            'nombre_completo' => 'required|string|max:255',
            'cp' => 'required|string',
            'municipio' => 'required|string|max:255',
            'direccion' => 'nullable|string|max:255',
            'correo' => 'required|email',
            'telefono' => 'required|string|max:20',
            'referencia_domicilio' => 'required|string|max:255',
        ]);

         // Verificar si el correo ya está registrado
        $clienteExistente = Cliente::where('correo', $request->correo)->first();
        if ($clienteExistente) {
            // Si el correo ya está registrado, devolver un error
            return back()->withErrors(['correo' => 'Este correo ya está registrado.'])->withInput();
        }
    
        // Aqui se verifica si el id del paquete se cargó correctamente
        if (session()->has('id_nombre_paquete')) {
            // Añadir el id_nombre_paquete a los datos validados
            $validatedData['fk_paquete'] = session('id_nombre_paquete');
        }

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

   // public function mostrarVerificacion()
    //{
        // Recuperar el código de verificación de la sesión
      //  $codigoVerificacion = session('codigo_verificacion');

     // Pasar el código a la vista
     //return view('verificar-Codigo', ['codigo' => $codigoVerificacion]);
    //}


    public function verificarCodigo(Request $request)
    {
        $request->validate([
            'codigo' => 'required',
        ]);

        if ($request->codigo === session('codigo_verificacion')) {
            DB::enableQueryLog();

            // Crear un nuevo cliente en la base de datos
            Cliente::create(session('datos_cliente'));
        
             // Obtener el registro de consultas
            $queryLog = DB::getQueryLog();

            // Mostrar la primera consulta (si es la única)
            dd($queryLog[0]);

            // Limpiar sesión
            session()->forget(['codigo_verificacion', 'datos_cliente']);
            // Limpiar sesión
            session()->forget(['codigo_verificacion', 'datos_cliente']);
        
            return redirect()->route('precontratoExitoso');
        } else {
            return back()->withErrors(['codigo' => 'El código ingresado es incorrecto.']);
        }
    }

    public function seleccionarPaquete($id_nombre_paquete)
    {
        // Verificar si el paquete existe en la base de datos
        
    
        // Guardar el ID del paquete en la sesión
        session(['id_nombre_paquete' => $id_nombre_paquete]);
    
        // Redirigir al formulario de datos personales
        return redirect()->route('mostrarFormulario');
    }
    
}
