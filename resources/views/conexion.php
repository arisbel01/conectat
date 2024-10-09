<?php
// Parámetros de conexión
$servername = "localhost";  // Servidor
$username = "root";         // Usuario
$password = "";             // pass
$dbname = "conect"; // bd

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos";
?>
