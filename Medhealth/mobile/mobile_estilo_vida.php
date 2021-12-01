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
        <title>Estilo de vida - MedHealth</title>
		<meta charset="UTF-8">
        <meta name="description" content="Olimpiadas INET 2021">
        <meta name="author" content="Acosta Soledad, Cabrera José, Mansilla Franco, Nores Mateo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="stylesheet" href="../style/mobile/mobile_common.css">
        <link rel="stylesheet" href="../style/mobile/mobile_header-footer.css">
        <link rel="stylesheet" href="../style/mobile/mobile_estilo_vida.css">
    </head>
    <body>
        <?php $dni = $_SESSION['dni_logeado']; $header=header_paginas($dni,$con); ?>

        <header>
            <navbar>
                <a href="mobile_user_index.php">Atrás</a>
                <img src="../src/icons/lifestyle_icon.svg">
            </navbar>
        </header>

        <main>
            <p id="info_text">
                El estilo de vida se refiere a las formas particulares de manifestarse el modo y las condiciones de vida en que las
                personas integran el mundo que les rodea y que incluye hábitos de alimentación, higiene personal, ocio, modos de
                relaciones sociales, sexualidad, vida relacional y de familia y mecanismos de afrontamiento social. 
            </p>

            <div>
                <p id="lifestyles_title">Ejemplo de estilo de vida saludable:</p>
                <div id="lifestyles">
                    <img src="../src/lifestyles/stress.svg" alt="">
                    <p>Controle su estrés</p>
                    <p>Alimentación Sana</p>
                    <img src="../src/lifestyles/nutrition.svg" alt="">
                    <img src="../src/lifestyles/beer.svg" alt="">
                    <p>No dañe su salud</p>
                    <p>Medite</p>
                    <img src="../src/lifestyles/meditation.svg" alt="">
                    <img src="../src/lifestyles/exercise.svg" alt="">
                    <p>Ejercite o mueva su cuerpo</p>
                    <p>Duerma lo suficiente</p>
                    <img src="../src/lifestyles/sleep.svg" alt="">
                    <img src="../src/lifestyles/tidy.svg" alt="">
                    <p>Mantenga un ambiente limpio y agradable</p>
                </div>
            </div>
            
        </main>
        
    </body>
</html>         