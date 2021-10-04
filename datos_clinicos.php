<?php
    include 'conexion.php';
    include 'header.php';
    session_start();
    $varsesion= $_SESSION['dni_logeado'];

    if($varsesion == null || $varsesion = ''){
        header("location:login.php");
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Datos Clínicos - MedHealth</title>
		<meta charset="UTF-8">
        <meta name="description" content="Olimpiadas INET 2021">
        <meta name="author" content="Acosta Soledad, Cabrera José, Mansilla Franco, Nores Mateo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style/common.css">
        <link rel="stylesheet" href="style/header-footer.css">
        <link rel="stylesheet" href="style/datos_clinicos.css">
    </head>
    <body>
        <?php $dni = $_SESSION['dni_logeado']; $header=header_paginas($dni,$con); echo($header[0]); ?>

        <main>
            <div id="info_text">
                <div id="title_img">
                    <img src="src/icons/clinicaldata_icon.svg" alt="">
                    <h2>Datos Clínicos</h2>
                </div>
                <div id="info_img">
                    <img src="src/icons/info_icon.svg" alt="">
                    <p>Haga clic en una sección para obtener más información</p>
                </div>
            </div>

            <div id="sections_container">
                <a class="item_container" href="datos_clinicos_informacion.php">
                    <img src="src/clinicaldata/about.svg" alt="">
                    <p>Acerca de</p>
                </a>
                <a class="item_container" href="datos_clinicos_datos.php">
                    <img src="src/clinicaldata/clinichistory.svg" alt="">
                    <p>Datos</p>
                </a>
                <a class="item_container" href="vacunas.php">
                    <img src="src/clinicaldata/vaccine.svg" alt="">
                    <p>Vacunas</p>
                </a>
                <a class="item_container" href="diario_paciente.php">
                    <img src="src/clinicaldata/pacientdiary.svg" alt="">
                    <p>Diario Paciente</p>
                </a>
            </div>

        </main>
        
        <footer></footer>

        <script src="scripts/header-footer.js"></script>
    </body>
</html>         
