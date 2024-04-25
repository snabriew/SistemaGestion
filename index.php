<?php  
    include './config/head.php'; 
?>

<body id="home">
    
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
                
                    <li class="scroll"><a class="btn btn-danger" href="#">Iniciar Sesión</a></li>
                </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
    </header><!--/header-->

    <section id="services">
        <div class="container">

            <div class="section-header">

                <h2 class="mb-4">Iniciar Sesión</h2>
                <form id="login-form">
                    <div class="form-group">
                        <label for="username">Usuario:</label>
                        <input type="text" id="username" name="username" class="form-control" required="">
                    </div>

                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" id="password" name="password" class="form-control" required="">
                    </div>

                    <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </form>
                <div id="message" class="mt-3"></div>

            </div>

        </div><!--/.container-->
    </section><!--/#services-->

</body>

<?php include './config/footer.php'; ?>

</html>