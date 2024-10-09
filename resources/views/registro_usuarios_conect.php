<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>
    
    <!-- Custom fonts for this template
    Julian puedes quitar todas estas css solo lo uso como ejemplo para distinguir los colores y los recuadros de texto y botonoes
    Puedes crear todo propio css y agregarlo aqui !! 

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/styles.css" rel="stylesheet">
    <!--Aqui finaliza los enlaces de css puedes quitar todo lo que esta de link href y colocar lo que vas a utilizar-->


</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <img src="logo1.png" alt="Descripción de la imagen" class="imagen-personalizada" />

                                <h1 class="h4 text-gray-900 mb-4">Registrarse</h1>
                            </div>
                              <!-- Mostrar mensajes de error o éxito -->
                            <?php
                            session_start(); // Asegúrate de iniciar la sesión
                            if (isset($_SESSION['error'])) {
                                echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
                                unset($_SESSION['error']); // Limpiar el mensaje después de mostrarlo
                            }
                            if (isset($_SESSION['success'])) {
                                echo '<div class="alert alert-success">' . $_SESSION['success'] . '</div>';
                                unset($_SESSION['success']); // Limpiar el mensaje después de mostrarlo
                            }
                            ?>

                            <!-- Div para mostrar mensajes de error o éxito -->
                            <div id="message" class="alert" style="display: none;"></div>

                            <form class="user" id="registerForm" action="insertat_usuario.php" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                        name="nombre" placeholder="Nombre" >
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            name="apellido" placeholder="Apellido">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                    name="correo" placeholder="Correo electronico">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                        name="pass" id="exampleInputPassword" placeholder="Contraseña">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                        name="repetirpass" id="exampleRepeatPassword" placeholder="Repetir contraseña">
                                    </div>
                                </div>
                                <!--Configurar boton para registrarse -->
                                <button type="submit" class="btn btn-primary btn-user btn-block" value="Registrar">
                                    Registrar cuenta
                                </button>

                                <!--
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                                -->
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">¿Has olvidado tu contraseña?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.html">¿Ya tienes una cuenta? ¡Acceso!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script src="verificarregistro.js"></script>

       <!-- Custom scripts for all pages
    <script src="js/registro.js"></script>-->
    

</body>

</html>