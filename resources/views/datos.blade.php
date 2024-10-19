<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>Pre-Contrato</title>
        <link href="{{ asset('css/datos.css') }}" rel="stylesheet">

        <title>Agency - Start Bootstrap Theme</title>
        <link href="{{ asset('css/pre-contrato.css') }}" rel="stylesheet">

        <!-- Font Awesome icons (free version)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
    </head>
    <body id="page-top">
        
    <header class="navbar">
            <div class="logo">


                <img src="{{asset('images/logo1.png')}}" alt="Logo" class="logo-img">
            </div>
           
            <nav>
                <ul class="nav-links">
                <li><a href="user">Inicio</a></li>
                    <li><a href="user">Planes de Internet</a></li>


                    <li><a href="#contacto">Contacto</a></li>
                    <li><a href="#soporte">Soporte</a></li>
                </ul>
            </nav>
        </header>

       
    <section class="container-mt-5">
        <h2 class="text-center">Datos de Pre-contrato</h2>
        <form action="{{ route('enviarCodigo') }}" method="POST">
            @csrf <!-- Protección CSRF en Laravel -->
           
                
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="codigoPostal" class="form-label">Nombre completo</label>
                    <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" placeholder="Nombre completo" value="{{ old('nombre_completo') }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="calle" class="form-label">Codigo Postal</label>
                    <input type="text" class="form-control" id="cp" name="cp" placeholder="Codigo Postal" value="{{ old('cp') }}" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="noExterior" class="form-label">Municipio</label>
                    <input type="text" class="form-control" id="municipio" name="municipio" placeholder="Municipio" value="{{ old('municipio') }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="noInterior" class="form-label">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value="{{ old('direccion') }}" placeholder="Direccion">
                </div>
            </div>

            <div class="row">
            <div class="col-md-6 mb-3">
                <label for="ciudad" class="form-label">Correo</label>
                <input type="email" class="form-control @error('correo') is-invalid @enderror" id="correo" name="correo" placeholder="Correo" value="{{ old('correo') }}" required>
                <!-- Mostrar mensaje de error si el correo ya está registrado -->
                @error('correo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
                <div class="col-md-6 mb-3">
                    <label for="alcaldia" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="{{ old('telefono') }}" maxlength="10" pattern="\d{10}" title="Debe ingresar exactamente 10 dígitos numéricos" required>
                </div>

                <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="ciudad" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ciudad" value="{{ old('ciudad') }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="alcaldia" class="form-label">Referencia de Domicilio</label>
                    <input type="text" class="form-control" id="referencia_domicilio" name="referencia_domicilio" placeholder="Referencia de Domicilio" value="{{ old('referencia_domicilio') }}" required>
                </div>
                

            </div>

            @if(session()->has('id_nombre_paquete'))
                <input type="hidden" name="id_nombre_paquete" value="{{ session('id_nombre_paquete') }}">
            @else
                <p>No se ha seleccionado un paquete. Por favor, selecciona uno.</p>
            @endif

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <button type="submit" class="btn btn-primary">Continuar</button>
            </div>
            
                <div class="invalid-feedback">
                    Este correo ya está registrado.
                </div>
        </form>
    </section>
    
    <footer>
        <div class="footer-container">
            <p>&copy; 2024 Tu Nombre. Todos los derechos reservados.</p>
            <ul class="footer-links">
                <li><a href="#">Política de Privacidad</a></li>
                <li><a href="#">Términos de Servicio</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
            <div class="support">
                <p>Soporte: <a href="tel:+1234567890">+1 234 567 890</a></p>
            </div>
            <div class="social-media">
                <a href="#" class="social-icon">Facebook</a>
                <a href="#" class="social-icon">Twitter</a>
                <a href="#" class="social-icon">Instagram</a>
            </div>
        </div>
    </footer>
    
  
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    </body>
</html>
