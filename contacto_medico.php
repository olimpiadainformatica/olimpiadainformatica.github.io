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
        <title>Contacto médico - MedHealth</title>
		<meta charset="UTF-8">
        <meta name="description" content="Olimpiadas INET 2021">
        <meta name="author" content="Acosta Soledad, Cabrera José, Mansilla Franco, Nores Mateo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style/common.css">
        <link rel="stylesheet" href="style/header-footer.css">
        <link rel="stylesheet" href="style/contacto_medico.css">
    </head>
    <body>
        <?php $dni = $_SESSION['dni_logeado']; $header=header_paginas($dni,$con); echo($header[0]); ?>

        <main>
            <div id="info_text">
                <img src="src/icons/contact_icon.svg" alt="">
                <h2>Beneficios de tener un médico de atención primaria: </h2>
            </div>

            <div id="about_text">
                <ul>
                    <li>Continuidad de atención</li>
                    <li>Manejo de medicamentos</li>
                    <li>Ahorro de tiempo</li>
                    <li>Prevención</li>
                    <li>Salud del comportamiento</li>
                    <li>La atención de salud integral bajo el enfoque del médico de atención primaria también incluye el monitoreo de la salud del comportamiento del paciente.</li>
                    <li>Sin espera en salas de guardia o consultorios</li>
                </ul>
            </div>

            <div id="socials">
                <p>Contacta con tu medico de confianza</p>
                <div id="socials_links">
                    <a href="https://www.instagram.com/medhealth_contacto/"><img src="src/socials/instagram.svg" alt="Instagram"></a>
                    <a href="https://twitter.com/med_contactos"><img src="src/socials/twitter.svg" alt="Twitter"></a>
                    <a href="https://www.facebook.com/MedHealth-269282438254730"><img src="src/socials/facebook.svg" alt="Facebook"></a>
                </div>
            </div>
        </main>
        
        <footer></footer>

        <script src="scripts/header-footer.js"></script>
    </body>
</html>         