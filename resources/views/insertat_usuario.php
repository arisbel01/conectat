<?php
session_start(); 
// Incluir el archivo de conexión
include 'conexion.php';



// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['correo'];
    $password = $_POST['pass'];
    $repetirpass = $_POST['repetirpass'];

    // Verificar si las contraseñas coinciden
    if ($password != $repetirpass) {
        $_SESSION['error'] = "Las contraseñas no coinciden.";
            header("Location: registro_usuarios_conect.php"); 
            exit();
    }

    // Hashear la contraseña antes de insertarla
    $password_hashed = password_hash($password, PASSWORD_BCRYPT);
    

        // Verificar si el correo ya existe
    $sql_check = "SELECT COUNT(*) FROM usuarios1 WHERE correo = ?";
    $stmt_check = $conn->prepare($sql_check);
    $stmt_check->bind_param("s", $email);
    $stmt_check->execute();
    $stmt_check->bind_result($count);
    $stmt_check->fetch();
    $stmt_check->close();

    if ($count > 0) {
        $_SESSION['error'] = "El correo ya está registrado.";
            header("Location: registro_usuarios_conect.php"); // Cambia esto al nombre de tu archivo HTML
            exit();
    } else {
        // Preparar la consulta SQL para insertar el usuario
    $sql = "INSERT INTO usuarios1 (nombre, apellido, correo, contraseña) VALUES (?, ?, ?, ?)";
    
    // Usar una declaración preparada para evitar inyección SQL
    if ($stmt = $conn->prepare($sql)) {
        // Vincular parámetros
        $stmt->bind_param("ssss", $nombre, $apellido, $email, $password);

        // Ejecutar la consulta
        if ($stmt->execute()) {
             // Si la inserción es exitosa
             $_SESSION['success'] = "Registro exitoso.";
             header("Location: registro_usuarios_conect.php");
            // header("Location: login.html"); // Cambia esto al nombre de tu archivo HTML
             
             exit();
        } else {
            // Si hay un error en la inserción
            $_SESSION['error'] = "Error en el registro: " . $stmt->error;
            header("Location: registro_usuarios_conect.php"); // Cambia esto al nombre de tu archivo HTML
            exit();
        }

        // Cerrar la declaración
        $stmt->close();
    } else {
        // Si hay un error al preparar la consulta
        echo "Error al preparar la consulta: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
    //header("Location: registro_usuarios_conect.php");
    unset($_SESSION['error']);
    unset($_SESSION['success']);

    }
    
}    
?>
