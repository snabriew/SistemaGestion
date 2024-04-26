<?php
// Parámetros de conexión
$host = 'localhost';
$usuario = 'root';
$contraseña = '';
$base_de_datos = 'sistema_bdm';

// Crear la conexión
$conn = mysqli_connect($host, $usuario, $contraseña, $base_de_datos);

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}
?>
