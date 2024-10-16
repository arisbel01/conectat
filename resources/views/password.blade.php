<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/password.css') }}" rel="stylesheet">
    <title>Recuperar Contraseña</title>
</head>
<body>
    <div class="container">
        <img src="img/correo2.png" alt="Logo" width="100" height="100">
        <h2>Recuperar Contraseña</h2>
        <p>Ingresa tu correo electrónico para recibir un enlace de recuperación</p>
        <form action="#" method="POST">
            <input type="email" name="email" placeholder="Correo electrónico" required>
            <input type="submit" value="Enviar">
        </form>
        <div class="message">
            <p>¿Recordaste tu contraseña? <a href="login.html">Inicia sesión</a></p>
        </div>
    </div>
</body>
</html>
