<?php
// Obtiene el nombre del script actual
$currentScript = $_SERVER['PHP_SELF'];

// Define las rutas de tus enlaces
$sistemaGestionLink = '/SistemaGestion/home.php';
$clientesLink = '/SistemaGestion/clientes/clientes.php';
$logoutLink = '/SistemaGestion/config/logout.php';
?>
<header id="header">
       <nav id="main-nav" class="navbar navbar-default navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"><img src="/SistemaGestion/images/" width="50" alt="logo"></a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="scroll <?php echo ($currentScript == $sistemaGestionLink) ? 'active' : ''; ?>"><a href="<?php echo $sistemaGestionLink; ?>">Sistema Gestion</a></li>
                    <li class="scroll <?php echo ($currentScript == $clientesLink) ? 'active' : ''; ?>"><a href="<?php echo $clientesLink; ?>">Clientes</a></li>
                    <li class="scroll"><a class="btn btn-danger" href="<?php echo $logoutLink; ?>">Cerrar Sesión</a></li>
                </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->