<?php

// modelo inmueble propiedades destacadas
function modelo_inmueble($r, $cantidad_inmuebles)
{
    for ($i = 0; $i < $cantidad_inmuebles; $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("180-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];

        echo '

        <div class="col-12 col-md-6 col-lg-4 col-xl-4 mb-5">
        <a href="./detalle_inmueble.php?co=' . $codigo . '">
            <div class="card">

                <div class="imagen">

                    <img src="' . $imagen . '" class="card-img-top" alt="...">

                    <div class="nombre_gestiones d-flex">
                        <p class="rounded p-1 bg_azul blanco mr-2">' . $api['Tipo_Inmueble'] . '</p>
                        <p class="rounded p-1 bg_rojo blanco">' . $api['Gestion'] . '</p>
                    </div>

                    <div class="precio blanco">
                        <h4>';
        if ($api['Gestion'] == 'Arriendo/venta') {
            echo '$' . $api['Canon'] . ' <br>$' . $api['Venta'];
        } else if ($api['Gestion'] == 'Arriendo') {
            echo '$' . $api['Canon'];
        } else {
            echo '$' . $api['Venta'];
        }
        echo '</h4>
                    </div>

                    <div class="lupa">
                        <i class="fas fa-search"></i>
                    </div>

                </div>

                <div class="align-items-bottom card-body d-flex flex-column justify-content-between">

                    <p class="card-title">' . $api['Barrio'] . ', ' . $api['Ciudad'] . '</p>

                    <p class="card-title text-muted"> Código: ' . $codigo . ' </p>

                    
                    <div class="d-flex justify-content-between">

                        <div class="d-flex align-items-baseline">
                            <i class="azul mr-2 fas fa-chart-area"></i>
                            <p> ' . $api['AreaConstruida'] . 'm<sup>2</sup> </p>
                        </div>

                        <div class="d-flex align-items-baseline">
                            <i class="azul mr-2 fas fa-bath"></i>
                            <p> ' . $api['banios'] . ' </p>
                        </div>

                        <div class="d-flex align-items-baseline">
                            <i class="azul mr-2 fas fa-bed"></i>
                            <p>  ' . $api['Alcobas'] . ' </p>
                        </div>

                        <div class="d-flex align-items-baseline">
                            <i class="azul mr-2 fas fa-warehouse"></i>
                            <p> ' . $api['garaje'] . ' </p>
                        </div>

                    </div>
                    

                </div>

            </div>

        </a>
    </div>
            ';
    }
}
//modelo inmueble de la pagina de inmuebles.php
function total_inmuebles($r)
{

    for ($i = 0; $i < count($r); $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("180-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];
        $descripcion = $api['descripcionlarga'];
        $limite_de_cadena = 10;
        // recortar cadena
        if (strlen($descripcion) <= $limite_de_cadena) {
            $descripcion = substr($descripcion, 0, $limite_de_cadena) . '...';
        } else {
            $descripcion = $descripcion . '...';
        }

        // fin de recortar cadena
        echo '

        <div class="col-12 col-md-6 col-lg-4 col-xl-4 mt-5">
                    <a href="./detalle_inmueble.php?co=' . $codigo . '">
                        <div class="card">

                            <div class="imagen">

                                <img src="' . $imagen . '" class="card-img-top" alt="...">

                                <div class="nombre_gestiones d-flex">
                                    <p class="rounded p-1 bg_azul blanco mr-2"> ' . $api['Tipo_Inmueble'] . ' </p>
                                    <p class="rounded p-1 bg_rojo blanco"> ' . $api['Gestion'] . ' </p>
                                </div>

                                <div class="precio blanco">
                                    <h4> $';
        if ($api['Gestion'] == 'Arriendo') {
            echo $api['Canon'];
        } else if ($api['Gestion'] == 'Venta') {
            echo $api['Venta'];
        } else {
            echo $api['Canon'] . '/ $' . $api['Venta'];
        }
        echo ' </h4>
                                </div>

                                <div class="lupa">
                                    <i class="fas fa-search"></i>
                                </div>

                            </div>

                            <div class="card-body">

                                <p class="card-title"> ' . $api['Barrio'] . ', ' . $api['Ciudad'] . ' </p>

                                <p class="card-title text-muted"> Código: ' . $codigo . ' </p>

                                <!-- ICONOS -->
                                <div class="d-flex justify-content-between">

                                    <div class="d-flex align-items-baseline">
                                        <i class="azul mr-2 fas fa-chart-area"></i>
                                        <p> ' . $api['AreaConstruida'] . 'm<sup>2 </p>
                                    </div>

                                    <div class="d-flex align-items-baseline">
                                        <i class="azul mr-2 fas fa-bath"></i>
                                        <p> ' . $api['banios'] . ' </p>
                                    </div>

                                    <div class="d-flex align-items-baseline">
                                        <i class="azul mr-2 fas fa-bed"></i>
                                        <p> ' . $api['Alcobas'] . ' </p>
                                    </div>

                                    <div class="d-flex align-items-baseline">
                                        <i class="azul mr-2 fas fa-warehouse"></i>
                                        <p> ' . $api['garaje'] . ' </p>
                                    </div>

                                </div>
                                <!-- ICONOS -->

                            </div>

                        </div>

                    </a>
                </div>
                ';
    }
}

//similares
function modelo_inmueble_similare($r)
{

    for ($i = 0; $i < count($r); $i++) {
        $imagen = existeImagen(($r[$i]['foto1']));
        $codigo = str_ireplace("180-", "", $r[$i]['Codigo_Inmueble']);
        $api = $r[$i];

        echo '

        <div class="col-12 col-lg-10 col-xl-10 mb-5">
        <a href="./detalle_inmueble.php?co=' . $codigo . '">
            <div class="card">

                <div class="imagen">

                    <img src="' . $imagen . '" class="card-img-top" alt="...">

                    <div class="nombre_gestiones d-flex">
                        <p class="rounded p-1 bg_azul blanco mr-2">' . $api['Tipo_Inmueble'] . '</p>
                        <p class="rounded p-1 bg_rojo blanco"> ' . $api['Gestion'] . ' </p>
                    </div>

                    <div class="precio blanco">
                        <h4> $';
                        if ($api['Gestion'] == 'Arriendo') {
                            echo $api['Canon'];
                        } else if ($api['Gestion'] == 'Venta') {
                            echo $api['Venta'];
                        } else {
                            echo $api['Canon'] . '/ $' . $api['Venta'];
                        }
                        echo ' </h4>
                    </div>

                    <div class="lupa">
                        <i class="fas fa-search"></i>
                    </div>

                </div>

                <div class="card-body">

                    <p class="card-title"> barrio cuidad </p>

                    <p class="card-title text-muted"> Código: '. $codigo .' </p>


                    <div class="d-flex justify-content-between">

                        <div class="d-flex align-items-baseline">
                            <i class="azul mr-2 fas fa-chart-area"></i>
                            <p> ' . $api['AreaConstruida'] . 'mts<sup>2</sup> </p>
                        </div>

                        <div class="d-flex align-items-baseline">
                            <i class="azul mr-2 fas fa-bath"></i>
                            <p>' . $api['banios'] . '</p>
                        </div>

                        <div class="d-flex align-items-baseline">
                            <i class="azul mr-2 fas fa-bed"></i>
                            <p> ' . $api['Alcobas'] . ' </p>
                        </div>

                        <div class="d-flex align-items-baseline">
                            <i class="azul mr-2 fas fa-warehouse"></i>
                            <p> ' . $api['garaje'] . ' </p>
                        </div>

                    </div>


                </div>

            </div>

        </a>
    </div>
    
    ';
    }
}
// Funciones para los modelos de propiedades
function existeImagen($r)
{
    if ($r == "") {
        $r = "images/no_image.png";
    }
    return $r;
}
