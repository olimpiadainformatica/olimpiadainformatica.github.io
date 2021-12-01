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
        <title>Covid-19 Estadísticas - MedHealth</title>
		<meta charset="UTF-8">
        <meta name="description" content="Olimpiadas INET 2021">
        <meta name="author" content="Acosta Soledad, Cabrera José, Mansilla Franco, Nores Mateo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="stylesheet" href="../style/mobile/mobile_common.css">
        <link rel="stylesheet" href="../style/mobile/mobile_header-footer.css">
        <link rel="stylesheet" href="../style/mobile/mobile_estadisticas.css">
    </head>
    <body>

        <?php $dni = $_SESSION['dni_logeado']; $header=header_paginas($dni,$con); ?>

        <header>
            <navbar>
                <a href="mobile_user_index.php">Atrás</a>
                <img src="../src/icons/covidstatistics_icon.svg">
            </navbar>
        </header>

        <main>
            <p id="info_text">
                La enfermedad por COVID‑19 es una enfermedad infecciosa provocada por el virus SARS-CoV-2.<br>
                La mayoría de las personas que padecen COVID‑19 sufren síntomas de intensidad leve a moderada y se recuperan
                sin necesidad de tratamientos especiales. Sin embargo, algunas personas desarrollan casos graves y necesitan
                atención médica.
            </p>

            <div id="about_text">
                <div>
                    <h2>¿CÓMO SE PROPAGA?</h2>
                    <p>
                        El virus puede propagarse desde la boca o la nariz de una persona infectada en forma de pequeñas partículas
                         líquidas que expulsa cuando tose, estornuda, habla, canta o respira. Estas partículas pueden ser desde pequeños
                         aerosoles hasta gotitas respiratorias más grandes.
                        Puedes contagiarte de COVID‑19 si respiras cerca de una persona infectada o si tocas una superficie contaminada
                         y, seguidamente, te tocas los ojos, la nariz o la boca. El virus se propaga más fácilmente en espacios interiores
                         o en aglomeraciones de personas.
                    </p>
                </div>
                <img src="../src/illustrations/estadisticas_slider.svg">
            </div>
        </main>

    </body>
</html>         