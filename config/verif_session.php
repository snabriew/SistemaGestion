<?php
// Inicia la sesión
session_start();

// Verifica si el usuario está autenticado
if (!isset($_SESSION['loggedin'])) {
    // Si no está autenticado, redirige al formulario de inicio de sesión
    header('Location: /SistemaGestion/index.php');
    exit();
}
?>