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
            ?>
        </table>
        </div>
        </div><!--/.container-->
        </section><!--/#services-->

</body>
<?php include '../config/footer.php'; ?>
</html>
