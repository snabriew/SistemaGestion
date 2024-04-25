<?php

$scon = mysqli_connect('server', 'user', 'pass', 'base_datos');

if (!$scon) {
    die("Conexión fallida: " . mysqli_connect_error());
}

mysqli_set_charset($scon, "utf8");
?>