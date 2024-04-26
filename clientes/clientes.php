<?php
    include '../config/conexion.php';    
    include '../config/verif_session.php'; 
    include '../config/head.php'; 
?>

<body id="home">
    
<?php include '../config/header.php'; ?>

        <section id="services" >
        <div class="container">

        <h1 class="text-center">Listado de Clientes</h1>
        <a class="btn btn-primary" href="agregar.php" role="button">Agregar Cliente</a>
        <div class="container">
            <table class="table table-light">
                    <tr>
                        <th>ID</th>
                        <th>Apellido</th>
                        <th>Nombre</th>
                        <th>DNI</th>
                        <th>Sexo</th>
                        <th>Domicilio</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Datos</th>
                        <th>Modificar</th>
                        <th>Eliminar</th>
                    </tr>
            <?php
            //aca hacer el listado de clientes

            $query = "SELECT id_cliente, apellido, nombre, dni, sexo, domicilio, telefono, correo, datos_importantes FROM clientes";
                $resultado = mysqli_query($conn, $query);
                if ($resultado) {
                    // Iterar sobre cada fila de resultado
                    while ($fila = mysqli_fetch_assoc($resultado)) {
                        echo "<tr>";
                        echo "<td>" . $fila['id_cliente'] . "</td>";
                        echo "<td>" . $fila['apellido'] . "</td>";
                        echo "<td>" . $fila['nombre'] . "</td>";
                        echo "<td>" . $fila['dni'] . "</td>";
                        echo "<td>" . $fila['sexo'] . "</td>";
                        echo "<td>" . $fila['domicilio'] . "</td>";
                        echo "<td>" . $fila['telefono'] . "</td>";
                        echo "<td>" . $fila['correo'] . "</td>";
                        echo "<td>" . $fila['datos_importantes'] . "</td>";
                        echo "<td><a href='actualizar_clientes.php?id=" . $fila['id_cliente'] . "'>Modificar</a></td>";
                        echo "<td><a href='eliminar.php?id=" . $fila['id_cliente'] . "'>Eliminar</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='11'>No se encontraron clientes</td></tr>";
                }
            ?>
        </table>
        </div>
        </div><!--/.container-->
        </section><!--/#services-->

</body>
<?php include '../config/footer.php'; ?>
</html>
