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
        <link rel="stylesheet" href="style/datos_clinicos_informacion.css">
    </head>
    <body>
        <?php $dni = $_SESSION['dni_logeado']; $header=header_paginas($dni,$con); echo($header[0]); ?>

        <main>
            <div id="info_text">
                <img src="src/icons/clinicaldata_icon.svg" alt="">
                <p>
                    Alude al seguimiento que se debe tener ante la detección de una enfermedad o una situación insalubre,
                     para una reducción de los efectos negativos y en lo posible una recuperación.
                </p>
            </div>

            <div id="about_text">
                    <p>
                        Los datos de una historia clínica ayudan a analizar el recorrido médico de un paciente.<br>
                        Se trata de un documento básico a la hora de tomar una decisión médica, por eso los datos
                         de una historia clínica deben incluir todo tipo de datos acerca de la salud de un paciente.
                    </p>
                <img src="src/clinicaldata/clinicaldata_illustration.svg">
            </div>
        </main>
        
        <footer></footer>

        <script src="scripts/header-footer.js"></script>
    </body>
</html>         