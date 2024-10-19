<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />


        <title>Catalogo-Paquetes</title>
        <link href="{{ asset('css/datos.css') }}" rel="stylesheet">

        <title>Agency - Start Bootstrap Theme</title>
        <link href="{{ asset('css/user.css') }}" rel="stylesheet">


        <title>Agency - Start Bootstrap Theme</title>
        <link href="{{ asset('css/user.css') }}" rel="stylesheet">

        <!-- Font Awesome icons (free version)-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        
    </head>
    <body id="page-top">
        
        <header class="navbar">
            <div class="logo">


                <img src="{{asset('images/logo1.png')}}" alt="Logo" class="logo-img">
            </div>
            <nav>
                <ul>
                    <li><a href="user">Inicio</a></li>
                    <li><a href="user">Planes de Internet</a></li>


                <img src="{{ asset('images/logonuevo.png') }}" alt="Logo" class="logo-img">
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="#inicio">Inicio</a></li>
                    <li><a href="#planes">Planes de Internet</a></li>

                    <li><a href="#contacto">Contacto</a></li>
                    <li><a href="#soporte">Soporte</a></li>
                </ul>
            </nav>
        </header>



        <section>        

       
        <section>
            <div class="diseñopaquetes">        


       
        <section>
            <div class="diseñopaquetes">        

            <div class="section">
                <div class="container">
                @foreach ($paquetes as $paquete)
                    <div class="card">
                        @if ($paquete->promocion)
                            <div class="new-tag">{{$paquete -> nombre_paquete}}</div>
                        @endif
                        <div class="megabytes">{{ $paquete->velocidad_paquete }}<span></span></div>
                        <div class="price">${{ $paquete->precio }}<span>/month</span></div>
                        <div class="includes">
                            <p>Includes:</p>
                            <div class="item">
                                <img src="images/icon.png" alt="icon">
                                <div class="item-title">{{ $paquete->caracteristicas_paquete }}</div>
                            </div>
                            <!-- Aquí puedes agregar más características si existen -->
                        </div>
                        <a class="button" href="{{ route('seleccionarPaquete', ['id_nombre_paquete' => $paquete->id_nombre_paquete]) }}">Contratar</a>

                    </div>
                @endforeach

                </div>
            </div>
            </div>
        </section>
        {{-- ***********************************************************************************footer --}}
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
       
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
    </body>

</html>
