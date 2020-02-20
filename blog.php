<?php require 'variables/variables.php';
$page = "Blog";
require 'controllers/noticiasController.php' ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/1archivos_header.php' ?>

    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria ?> </title>
</head>

<body>

    <!-- HEADER -->
    <header>
        <?php include 'layout/3header.php' ?>
    </header>
    <!-- HEADER -->

    <!-- BANNER -->
    <section id="banner" class="margen_top">

        <div class="imagen position-absolute">
            <img src="images/banner_blog.jpg" alt="">
        </div>

        <div class="fondo_negro position-absolute">
        </div>

        <div class="d-flex flex-column align-items-center justify-content-center contenido position-absolute blanco">
            <h1> Blog </h1>
            <p> <a class="a_banner" href="index.php">Inicio</a> | Blog </p>
        </div>

    </section>
    <!-- BANNER -->

    <!-- ULTIMAS NOTICIAS -->
    <section id="ultimas_noticias">

        <div class="container">

        <div class="container-fluid d-flex align-items-center justify-content-center mt-5"> 
            <h2 class="position-relative linea"> Públicaciones </h2>
        </div>


        </div>

        <!-- CARDS DEL BLOG -->
        <div class="container d-flex flex-wrap justify-content-center">

            <?php if (isset($noticias_array)) {
                modelo_noticia($noticias_array);
            } else {
                echo '<div class="col 12 cont_publicar ">
                        <h3 class="text-center">Muy pronto publicaremos contenido para ti<h3>
                        </div>';
            }
            ?>

        </div>

        <!-- CARDS DEL BLOG -->


    </section>
    <!-- ULTIMAS NOTICIAS -->




    <!-- FOOTER -->
    <footer class="mt-5">
        <?php include 'layout/4footer.php' ?>
    </footer>
    <!-- FOOTER -->

    <?php include 'layout/2archivos_footer.php' ?>

</body>

</html>