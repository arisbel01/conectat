<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Administrador;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        
        $request->validate([
            'Correo_electronico' => 'required|email',
            'Contraseña' => 'required',
        ]);

        $credentials = $request->only('Correo_electronico', 'Contraseña');

        // Buscar al administrador por correo electrónico
        $admin = Administrador::where('Correo_electronico', $credentials['Correo_electronico'])->first();

        if ($admin && $admin->Contraseña === $credentials['Contraseña']) {
            // Autenticar al administrador manualmente
            Auth::guard('admin')->login($admin);

            // Redirigir al dashboard o página deseada
            return redirect()->intended('/');
        }

        // Si las credenciales no son correctas
        return redirect()->back()->with('error', 'Las credenciales no son correctas');
    }
}
