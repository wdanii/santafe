<?php require 'variables/variables.php';
$page = "Servicios" ?>
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
            <img src="images/banner_servicios.jpg" alt="">
        </div>

        <div class="fondo_negro position-absolute">
        </div>

        <div class="d-flex flex-column align-items-center justify-content-center contenido position-absolute blanco">
            <h1> Servicios </h1>
            <p> <a class="a_banner" href="index.php">Inicio</a> | Servicios </p>
        </div>

    </section>
    <!-- BANNER -->

    <!-- SERVICIOS  -->
    <section id="servicios">
        <div class="container">

            <div class="container-fluid d-flex align-items-center justify-content-center my-5">
                <h2 class="linea position-relative"> Nuestros Servicios </h2>
            </div>

            <!-- TEXTO SERVICIOS -->
            <div class="d-flex flex-wrap">

                <!-- ARRENDAMIENTO  1-->
                <div class="mt-5 col-12 d-flex flex-wrap">

                    <div class="order-2 order-lg-1 order-xl-1 col-12 col-md-6 col-xl-6">

                        <div class="d-flex align-items-center justify-content-center">
                            <div id="ancla1" class="ancla"></div>
                            <i class="mr-2 azul animacion <?php echo $iconos_servicios['arrendamientos'] ?>"> </i>
                            <h2 class="text-center my-2"> <?php echo $texto_servicios['arrendamiento']['titulo'] ?> </h2>
                        </div>

                        <p> <?php echo $texto_servicios['arrendamiento']['parrafos']['0'] ?> </p>
                        <p> <?php echo $texto_servicios['arrendamiento']['parrafos']['1'] ?> </p>

                    </div>

                    <div class="imagen mb-3 mb-lg-0 mb-xl-0 order-1 order-lg-2 order-xl-2 col-12 col-md-6 col-xl-6">
                        <img class="rounded h-100 w-100 " src="images/arriendos.png" alt="">
                    </div>

                </div>
                <!-- ARRENDAMIENTO -->

                <!-- SEGUROS 6-->
                <div class="mt-5 col-12 d-flex flex-wrap">

                    <div class="imagen mb-3 mb-lg-0 mb-xl-0 col-12 col-md-6 col-xl-6">
                        <img class="rounded h-100 w-100" src="images/seguros.png" alt="">
                    </div>

                    <div class="col-12 col-md-6 col-xl-6">

                        <div class="d-flex align-items-center justify-content-center">
                            <div id="ancla6" class="ancla"></div>
                            <i class="mr-2 azul animacion <?php echo $iconos_servicios['seguros'] ?>"> </i>
                            <h2 class="text-center my-2"> <?php echo $texto_servicios['seguros']['titulo'] ?> </h2>
                        </div>

                        <p> <?php echo $texto_servicios['seguros']['parrafos']['0'] ?> </p>
                        <p> <?php echo $texto_servicios['seguros']['parrafos']['1'] ?> </p>

                    </div>

                </div>
                <!-- SEGUROS -->


                <!-- CORRETAJE 2-->
                <div class="mt-5 col-12 d-flex flex-wrap">

                    <div class="d-flex align-items-center flex-column justify-content-center order-2 order-lg-1 order-xl-1 col-12 col-md-6 col-xl-6">

                        <div class="d-flex align-items-center justify-content-center">
                            <div id="ancla2" class="ancla"></div>
                            <i class="mr-2 azul animacion <?php echo $iconos_servicios['corretaje'] ?>"> </i>
                            <h2 class="text-center my-2"> <?php echo $texto_servicios['corretaje']['titulo'] ?> </h2>
                        </div>

                        <p> <?php echo $texto_servicios['corretaje']['parrafo'] ?> </p>

                    </div>

                    <div class="imagen mb-3 mb-lg-0 mb-xl-0 order-1 order-lg-2 order-xl-2 col-12 col-md-6 col-xl-6">
                        <img class="h-100 w-100 rounded" src="images/corretaje1.jpg" alt="">
                    </div>

                </div>
                <!-- CORRETAJE -->

                <!-- VENTAS 3-->
                <div class="mt-5 col-12 d-flex flex-wrap">

                    <div class="imagen mb-3 mb-lg-0 mb-xl-0 col-12 col-md-6 col-xl-6">
                        <img class="rounded h-100 w-100" src="images/ventas.png" alt="">
                    </div>

                    <div class="col-12 col-md-6 col-xl-6">

                        <div class="d-flex align-items-center justify-content-center">
                            <div id="ancla3" class="ancla"></div>
                            <i class="mr-2 azul animacion <?php echo $iconos_servicios['ventas'] ?>"> </i>
                            <h2 class="text-center my-2"> <?php echo $texto_servicios['ventas']['titulo'] ?> </h2>
                        </div>

                        <p> <?php echo $texto_servicios['ventas']['parrafo'] ?> </p>

                    </div>
                </div>  

                <!-- VENTAS -->

                <!-- AVALUOS 4-->
                <div class="mt-5 col-12 d-flex flex-wrap">

                    <div class="order-2 order-lg-1 order-xl-1 col-12 col-md-6 col-xl-6">

                        <div class="d-flex align-items-center justify-content-center">
                            <div id="ancla4" class="ancla"></div>
                            <i class="mr-2 azul animacion <?php echo $iconos_servicios['avaluos'] ?>"> </i>
                            <h2 class="text-center my-2"> <?php echo $texto_servicios['avaluos']['titulo'] ?> </h2>
                        </div>

                        <p> <?php echo $texto_servicios['avaluos']['parrafo'] ?> </p>

                    </div>

                    <div class="imagen mb-3 mb-lg-0 mb-xl-0 order-1 order-lg-2 order-xl-2 col-12 col-md-6 col-xl-6">
                        <img class="rounded h-100 w-100" src="images/avaluos.png" alt="">
                    </div>
                </div>
                <!-- AVALUOS -->

                <!-- ASISTENCIAS LOCATIVAS 5-->
                <div class="mt-5 col-12 d-flex flex-wrap">

                    <div class="imagen mb-3 mb-lg-0 mb-xl-0 col-12 col-md-6 col-xl-6">
                        <img class="h-100 w-100 rounded" src="images/locativas.png" alt="">
                    </div>

                    <div class="col-12 col-md-6 col-xl-6">

                        <div class="d-flex align-items-center justify-content-center">
                            <div id="ancla5" class="ancla"></div>
                            <i class="mr-2 azul animacion <?php echo $iconos_servicios['asistencias_locativas'] ?>"> </i>
                            <h2 class="text-center my-2"> <?php echo $texto_servicios['asistencias_locativas']['titulo'] ?> </h2>
                        </div>
                        <p> <?php echo $texto_servicios['asistencias_locativas']['parrafo'] ?> </p>

                    </div>

                </div>
                <!-- ASISTENCIAS LOCATIVAS -->





            </div>
            <!-- TEXTO SERVICIOS -->

        </div>
    </section>
    <!-- SERVICIOS  -->


    <!-- FOOTER -->
    <footer class="mt-5">
        <?php include 'layout/4footer.php' ?>
    </footer>
    <!-- FOOTER -->

    <?php include 'layout/2archivos_footer.php' ?>

</body>

</html>