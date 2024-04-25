<?php
    
include './config/conexion.php';    

$username = $_POST['username'];
$password = $_POST['password'];

// Consulta la base de datos para verificar las credenciales
$sql = "SELECT * FROM usuarios WHERE usuario = '$username' AND pass = '$password'";
$result = $scon->query($sql);

if ($result->num_rows > 0) {
    // Inicio de sesión exitoso, establece la variable de sesión
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    echo "success"; // Inicio de sesión exitoso
} else {
    echo "error"; // Usuario o contraseña incorrectos
}

$scon->close();
?>