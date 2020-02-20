<?php require 'variables/variables.php';
$page = "Contáctanos" ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'layout/1archivos_header.php' ?>

    <title> <?php echo $page . ' | ' . $nombre_inmobiliaria ?> </title>
</head>
<style>

.posicon_footer{
    position: absolute;
    width: 100%;
}

</style>

<body>

    <!-- HEADER -->
    <header>
        <?php include 'layout/3header.php' ?>
    </header>
    <!-- HEADER -->

    <!-- BANNER -->
    <section id="banner" class="margen_top">

        <div class="imagen position-absolute">
            <img src="images/banner_contacto.jpg" alt="">
        </div>

        <div class="fondo_negro position-absolute">
        </div>

        <div class="d-flex flex-column align-items-center justify-content-center contenido position-absolute blanco">
            <h1> Contáctanos </h1>
            <p> <a class="a_banner" href="index.php">Inicio</a> | Contáctanos </p>
        </div>

    </section>
    <!-- BANNER -->

    <!-- CARDS CONTACTANOS -->
    <section id="cards_contactanos">

        <div class="container d-flex flex-wrap align-items-center justify-content-center">

            <div class="col-4 mt-5">
                <div class="card">

                    <div class="m-auto d-flex align-items-center p-4">
                        <i id="icono" class="azul mx-2 fas fa-map-marker-alt"> </i>
                        <p> <?php echo $datos_contacto['direccion']['direccion'] ?> </p>
                    </div>

                </div>
            </div>

            <div class="col-4 mt-5">
                <a href="mailto: <?php echo $datos_contacto['correo']['correo'] ?>" class="card">

                    <div class="m-auto d-flex align-items-center p-4">
                        <i id="icono" class="azul mx-2 far fa-envelope"> </i>
                        <p class="text-break"> <?php echo $datos_contacto['correo']['correo'] ?> </p>
                    </div>

                </a>
            </div>

            <div class="col-4 mt-5">
                <a href="tel: <?php echo $datos_contacto['celular']['link'] ?>" class="card">

                    <div class="m-auto d-flex align-items-center p-4">
                        <i id="icono" class="azul mx-2 fas fas fa-mobile-alt"> </i>
                        <p> <?php echo $datos_contacto['celular']['imprimir'] ?> </p>
                    </div>

                </a>
            </div>


            <div class="col-4 mt-5">
                <a href="tel: <?php echo $datos_contacto['telefono_fijo']['link'] ?>" class="card">

                    <div class="m-auto d-flex align-items-center p-4">
                        <i id="icono" class="azul mx-2 fas fa-phone-alt"> </i>
                        <p> <?php echo $datos_contacto['telefono_fijo']['imprimir'] ?> </p>
                    </div>

                </a>
            </div>


            <div class="col-4 mt-5">
                <div class="card">

                    <a target="blank" href="<?php echo $datos_contacto['whatsapp']['link'] ?>" class="m-auto d-flex align-items-center p-4">
                        <i id="icono" class="azul mx-2 fab fa-whatsapp"> </i>
                        <p> <?php echo $datos_contacto['whatsapp']['imprimir'] ?> </p>
                    </a>

                </div>
            </div>

            <div class="col-4 mt-5">
                <div class="card">

                    <div class="m-auto d-flex align-items-center p-4">
                        <i id="icono" class="azul mx-2 fas fa-calendar-alt"> </i>
                        <p> <?php echo $datos_contacto['horario']['horario'] ?> </p>
                    </div>

                </div>
            </div>

        </div>



    </section>
    <!-- CARDS CONTACTANOS -->

    <!-- FORMULARIO -->
    <div class="container mt-5">
        <form action="email/enviarCorreo.php" method="POST">

            <div class="text-center row">

                <div class="my-3 col-12 col-md-6 col-lg-6 col-xl-6">
                    <input type="text" class="border codigo_input form-control" id="" name="name" aria-describedby="emailHelp" placeholder="Nombre completo" required>
                </div>

                <div class="mb-3 mb-md-0 mb-lg-0 mb-xl-0 align-items-center d-flex col-12 col-md-6 col-lg-6 col-xl-6">
                    <input type="email" class="border codigo_input form-control" name="email" aria-describedby="emailHelp" placeholder="Correo electrónico" required>
                </div>

                <div class="mb-3 col-12 col-md-6 col-lg-6 col-xl-6">
                    <input type="text" class="border codigo_input form-control" name="asunto" aria-describedby="emailHelp" placeholder="Asunto del mensaje" required>
                </div>

                <div class="mb-3 col-12 col-md-6 col-lg-6 col-xl-6">
                    <input type="text" class="border codigo_input form-control" name="telefono" aria-describedby="emailHelp" placeholder="Número de contacto" required>
                </div>

                <div class="mb-3 col-12 form-group d-flex align-items-start">
                    <label for="exampleFormControlTextarea1"></label>
                    <textarea class="form-control" name="message" placeholder="Ingresa tu mensaje" rows="3" required></textarea>
                </div>

                <div class="ml-3 form-group form-check">
                    <input type="checkbox" class="form-check-input" required>
                    <label class="form-check-label" for="exampleCheck1"> Confimo que he leído, entendido y acepto la <a class="tratamiento" href="POLITICA_DE_PROTECCION_DE_DATOS.pdf" download="POLITICA_DE_PROTECCION_DE_DATOS.pdf"></span>política de tratamiento de datos personales.</a> </label>
                </div>


                <div class="m-0 justify-content-center justify-content-lg-start justify-content-xl-start col-12 mb-3 row">
                    <input class="btn boton" type="submit" value="Enviar">
                </div>

            </div>
        </form>
    </div>
    <!-- FORMULARIO -->

    <!-- FOOTER -->
    <footer class="mt-5">
        <?php include 'layout/4footer.php' ?>
    </footer>
    <!-- FOOTER -->

    <?php include 'layout/2archivos_footer.php' ?>

</body>

</html>