<?php
session_start();
$correo = $_SESSION['Auntentificar'];

if(!isset($correo)){

    header("location: .../Inicio.html");
    
}else{

    

   
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>RESTAURANT CISNEROS</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|PT+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/style.css">
</head>

<body>


    <header class="site-header">
        <div class="contenedor">
            <div class="barra">
                <a href="/">
                    <h1 class="no-margin">Kaliska <span> GOURMET</span></h1>
                </a>

                <nav class="navegacion">
                    <a href="../../nosotros.html">Nosotros</a>
                    <a href="../../menu.html">menu</a>
                    <a href="../../contacto.html">contacto</a>
                  <?php  echo "<center><a href= 'SalirTrabajador.php'> Cerrar Sesión </a></center>"; ?>
                </nav>
            </div>
            <!-- cierre barra-->
            <div class="texto-header">
            <?php  echo "<center><h2>Bienvenido Usuario con el correo $correo </h2></center>"; ?>
            <p>deleita tu paladar con las mejores recetas</p>
                <h2 class="no-margin">El mejor restaurante de la ciudad</h2>
            
                
            </div>
        </div>
        <!--contenedor-->

    </header>


    <div class="contenido-principal contenedor">
        <main class="blog">
            <h2>Nuestro blog</h2>
            <article class="entrada-blog">
                <div class="imagen">
                    <img src="../../img/blog1.jpg" alt="imagen blog">
                </div>
                <!--imagen-->
                <div class="contenido-blog">
                    <h3 class="no-margin">RECETAS DE MAR </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <a href="entrada.html" class="btn btn-primario">Leer Entrada</a>
                </div>
            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <img src="../../img/blog2.jpg" alt="imagen blog">
                </div>
                <!--imagen-->
                <div class="contenido-blog">
                    <h3 class="no-margin">MOJARRA </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <a href="entrada.html" class="btn btn-primario">Leer Entrada</a>
                </div>
            </article>
            <article class="entrada-blog">
                <div class="imagen">
                    <img src="../../img/blog3.jpg" alt="imagen blog">
                </div>
                <!--imagen-->
                <div class="contenido-blog">
                    <h3 class="no-margin">FILETE DE SALMON</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    <a href="entrada.html" class="btn btn-primario">Leer Entrada</a>
                </div>
            </article>
        </main>

        <aside class="menu">
            <h2>Nuestro delicioso menu</h2>

            <ul class="menu-lista">
                <li class="menu">
                    <h4 class="no-margin">platos preferidos por los clientes</h4>
                    <p class="no margin">filete <span>de salmon</span></p>
                    <p class="no-margin">precio: <span> 25.000 </span></p>
                    <a href="../../menu.html" class="btn btn-primario">Mas informacion</a>
                </li>

                <li class="menu">
                    <h4 class="no-margin">platos basicos</h4>
                    <p class="no-margin">pastas <span>con salsa boloñesa</span></p>
                    <p class="no-margin">precio: <span> 10.000 </span></p>
                    <a href="../../menu.html" class="btn btn-secundario">Mas informacion</a>
                </li>

            </ul>
        </aside>
    </div>
    <!--contenido principal-->
    <footer class="site-footer">
        <div class="contenedor">
            <div class="barra">
                <p class="no-margin">kaliska<span>GOURMET</span></p>

                <nav class="navegacion">
                    <a href="../../nosotros.html">Nosotros</a>
                    <a href="../../menu.html">menu</a>
                    <a href="../../contacto.html">contacto</a>
                </nav>

            </div>
        </div>

    </footer>

</body>

</html>