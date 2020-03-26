<?php require 'variables/variables.php';
require 'controllers/inmueblesController.php';
$page = "Inmuebles" ?>
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
            <img src="images/slider_3.jpg" alt="">
        </div>

        <div class="fondo_negro position-absolute">
        </div>

        <div class="d-flex flex-column align-items-center justify-content-center contenido position-absolute blanco">
            <h1> Inmuebles </h1>
            <p> <a class="a_banner" href="index.php">Inicio</a> | Inmuebles </p>
        </div>

    </section>
    <!-- BANNER -->

    <!-- BUSCADOR -->
    <section id="formulario" style="bottom:100px;" class="espacio_top">

        <?php include 'layout/buscador.php' ?>

    </section>
    <!-- BUSCADOR -->

    <!-- PROPIEDADES DESTACADAS -->
    <section id="propiedades_destacadas" >

        <div class="container">

        <div class="container-fluid d-flex align-items-center justify-content-center my-3"> 
            <h2 class="position-relative linea"> Inmuebles disponibles </h2>
        </div>



            <!-- CARDS -->
            <div class="d-flex flex-wrap align-items-center justify-content-center">

                <!-- propiedades -->
                <?php
                if (is_array($api)) {
                    listar_inmuebles($api['Inmuebles']);
                } else {
                    echo '<div class="col-12">
                        <h2 class="text-center" >No se encontraron inmuebles</h2>
                    </div>';
                }
                ?>

            </div>
            <!-- PAGINADOR -->
            <div class="col-12 text-center">
                <?php if (is_array($api)) : ?>
                    <ul class="pagination mt-4 align-items-end justify-content-center">
                        <?php if ($paginator->getPrevUrl()) : ?>
                            <li class="page-item"><a href="<?php echo $paginator->getPrevUrl(); ?>" class="page-link">&laquo; </a></li>
                        <?php endif; ?>
                        <?php foreach ($paginator->getPages() as $page) : ?>
                            <?php if ($page['url']) : ?>
                                <li <?php echo $page['isCurrent'] ? 'class="page-item active"' : ''; ?>>
                                    <a href="<?php echo $page['url']; ?>" class="page-link"><?php echo $page['num']; ?></a>
                                </li>
                            <?php else : ?>
                                <li class="page-item disabled"><span><?php echo $page['num']; ?></span></li>
                            <?php endif; ?>
                        <?php endforeach; ?>

                        <?php if ($paginator->getNextUrl()) : ?>
                            <li class="page-item"><a href="<?php echo $paginator->getNextUrl(); ?>" class="page-link"> &raquo;</a></li>
                        <?php endif; ?>
                    </ul>
                <?php endif; ?>
            </div>
            <!-- CARDS -->

        </div>
    </section>
    <!-- PROPIEDADES DESTACADAS -->



    <!-- FOOTER -->
    <footer class="mt-5">
        <?php include 'layout/4footer.php' ?>
    </footer>
    <!-- FOOTER -->

    <?php include 'layout/2archivos_footer.php' ?>
    <script src="conexion_api/validadores.js"></script>
    <script src="conexion_api/buscador.js"></script>


</body>

</html>