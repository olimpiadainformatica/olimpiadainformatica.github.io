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
        <title>Tipos de enfermedades - MedHealth</title>
		<meta charset="UTF-8">
        <meta name="description" content="Olimpiadas INET 2021">
        <meta name="author" content="Acosta Soledad, Cabrera José, Mansilla Franco, Nores Mateo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style/common.css">
        <link rel="stylesheet" href="style/header-footer.css">
        <link rel="stylesheet" href="style/tipos_enfermedades.css">
    </head>
    <body>

        <?php $dni = $_SESSION['dni_logeado']; $header=header_paginas($dni,$con); echo($header[0]); ?>
        
        <main>
            <div id="info_text">
                <img src="src/icons/diseases_icon.svg" alt="">
                <p>
                    Dependiendo de los órganos o tejidos afectados y del motivo de su aparición, podemos clasificar cualquier patología
                    enfermedad dentro de uno de estos grupos:
                </p>
            </div>

            <div id="diseases_list">
                <p>ONCOLOGICAS</p>
                <p>INFECCIOSAS Y PARASITARIAS</p>
                <p>SISTEMA INMUNITARIO</p>
                <p>SISTEMA NERVIOSO</p>
                <p>DE LA SANGRE</p>
                <p>OFTALMOLÓGICAS Y DE LA VISIÓN</p>
                <p>CARDIOVASCULARES</p>
                <p>ENDÓCRINAS</p>
                <p>DE LA PIEL</p>
                <p>SISTEMA DIGESTIVO</p>
                <p>AUDITIVAS</p>
                <p>RESPIRATORIAS</p>
                <p>APARATO GENITOURINARIO</p>
                <p>TRASTORNOS MENTALES DEL COMPORTAMIENTO Y DESARROLLO</p>
                <p>CONGÉNITAS Y ALTERACIONES CROMOSÓNICAS</p>

            </div>
        </main>
        
        <footer></footer>

        <script src="scripts/header-footer.js"></script>
    </body>
</html>         