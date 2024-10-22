<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaquetesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaqueteController;
use App\Http\Controllers\PreContratoController;
use App\Http\Controllers\MostrarClientesController;
use App\Http\Controllers\EditarClienteController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AdminController;

// Ruta para el formulario de login
Route::get('/login', function () {
    return view('login');  // Asegúrate de que esta vista existe
})->name('login');

// Ruta para procesar el login
Route::post('/login', [AdminController::class, 'login'])->name('admin.login');


// Rutas protegidas
Route::middleware('auth')->group(function () {
   
});

Route::get('/', [PaquetesController::class, 'index'])->name('paquete.index');

Route::get('/agregar-paquete', [PaqueteController::class, 'create']);
    Route::post('/agregar-paquete', [PaqueteController::class, 'store']);
    Route::get('/editar-paquete/{id}', [PaqueteController::class, 'edit'])->name('paquete.edit');
    Route::put('/editar-paquete/{id}', [PaqueteController::class, 'update'])->name('paquete.update');
    Route::delete('/paquete/{id}', [PaqueteController::class, 'destroy'])->name('paquete.destroy');
    
    // Rutas para manejar clientes
    Route::get('/clienteRegistrados', [MostrarClientesController::class, 'mostrarClientes'])->name('clientes');
    Route::delete('/cliente/{id}', [MostrarClientesController::class, 'destroy'])->name('cliente.destroy');
    Route::get('/clienteRegistrados/{id}', [EditarClienteController::class, 'editarCliente'])->name('cliente.edit');
    Route::put('/cliente/{id}', [EditarClienteController::class, 'actualizarCliente'])->name('cliente.update');


Route::get('/user', [UserController::class, 'showPackages'])->name('mostrar.paquetes');
Route::get('/datos', function () { return view('datos'); });

// Otras rutas
Route::get('/recuperar', function () { return view('password'); });
Route::get('/registro', function () { return view('registro'); });
Route::get('/precontrato', [PreContratoController::class, 'mostrarFormulario'])->name('mostrarFormulario');
Route::post('/precontrato/enviar-codigo', [PreContratoController::class, 'enviarCodigo'])->name('enviarCodigo');
Route::get('/precontrato/verificar-Codigo', [PreContratoController::class, 'mostrarVerificacion'])->name('verificarCodigo');
Route::post('/precontrato/verificar-Codigo', [PreContratoController::class, 'verificarCodigo'])->name('verificarCodigo');
Route::get('/seleccionar-paquete/{id_nombre_paquete}', [PreContratoController::class, 'seleccionarPaquete'])->name('seleccionarPaquete');
Route::post('/enviar-correo', [MailController::class, 'enviarCorreo'])->name('enviar.correo');
