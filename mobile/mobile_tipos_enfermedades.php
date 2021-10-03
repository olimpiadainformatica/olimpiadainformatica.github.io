<?php
    include '../conexion.php';
    include '../header.php';
    session_start();
    $varsesion= $_SESSION['dni_logeado'];

    if($varsesion == null || $varsesion = ''){
        header("location:mobile_login.php");
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Tipos de Enfermedades - MedHealth</title>
		<meta charset="UTF-8">
        <meta name="description" content="Olimpiadas INET 2021">
        <meta name="author" content="Acosta Soledad, Cabrera José, Mansilla Franco, Nores Mateo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="stylesheet" href="../style/mobile/mobile_common.css">
        <link rel="stylesheet" href="../style/mobile/mobile_header-footer.css">
        <link rel="stylesheet" href="../style/mobile/mobile_tipos_enfermedades.css">
    </head>
    <body>
        <?php $dni = $_SESSION['dni_logeado']; $header=header_paginas($dni,$con); ?>

        <header>
            <navbar>
                <a href="mobile_user_index.php">Atrás</a>
                <img src="../src/icons/diseases_icon.svg">
            </navbar>
        </header>

        <main>
            <p id="info_text">
                Dependiendo de los órganos o tejidos afectados y del motivo de su aparición, podemos clasificar cualquier
                patología o enfermedad dentro de uno de estos grupos:
            </p>
            

            <div id="about_text">
                <ul>
                    <li>ONCOLOGICAS</li>
                    <li>INFECCIOSAS Y PARASITARIAS</li>
                    <li>SISTEMA INMUNITARIO</li>
                    <li>SISTEMA NERVIOSO</li>
                    <li>DE LA SANGRE</li>
                    <li>OFTALMOLÓGICAS Y DE LA VISIÓN</li>
                    <li>CARDIOVASCULARES</li>
                    <li>ENDÓCRINAS</li>
                    <li>DE LA PIEL</li>
                    <li>SISTEMA DIGESTIVO</li>
                    <li>AUDITIVAS</li>
                    <li>RESPIRATORIAS</li>
                    <li>APARATO GENITOURINARIO</li>
                    <li>TRASTORNOS MENTALES DEL COMPORTAMIENTO Y DESARROLLO</li>
                    <li>CONGÉNITAS Y ALTERACIONES CROMOSÓNICAS</li>
                </ul>
            </div>

            <img src="../src/illustrations/tipos_enfermedades_slider.jpg" id="diseases_img">

        </main>
    </body>
</html>         