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
        <title>Ayuda - MedHealth</title>
		<meta charset="UTF-8">
        <meta name="description" content="Olimpiadas INET 2021">
        <meta name="author" content="Acosta Soledad, Cabrera José, Mansilla Franco, Nores Mateo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style/common.css">
        <link rel="stylesheet" href="style/header-footer.css">
        <link rel="stylesheet" href="style/ayuda.css">
    </head>
    <body>
        
        <?php $dni = $_SESSION['dni_logeado']; $header=header_paginas($dni,$con); echo($header[0]); ?>

        <main>
            <h1>Sección de ayuda al usuario acerca de los botones y redireccionamientos</h1>
            
            <div id="help_container">
                <div class="item_container container1">
                    <h2>BOTÓN HOME</h2>
                    <p>Su objetivo es regresar a la página principal</p>
                </div>
                <div class="item_container container1">
                    <h2>BOTÓN <span id="about_format">ACERCA DE</span></h2>
                    <p>Su objetivo es informar acerca de quiénes realizaron el sitio web y sus respectivos roles.</p>
                </div>
                <div class="item_container container1">
                    <h2>BOTÓN INICIO SESIÓN</h2>
                    <p>Su objetivo es acceder a la página web para  conocer los servicios que ofrecemos.</p>
                </div>
                <div class="item_container container1">
                    <h2>BOTÓN REGISTRO</h2>
                    <p>Su objetivo es guardar datos del paciente a la base de datos, además de facilitar su acceso a los servicios e información individual necesaria.</p>
                </div>
                <div class="item_container container1">
                    <h2>PROBLEMAS INICIO SESIÓN</h2>
                    <p>Verificar si se encuentra registrado, de ser así, pruebe con recuperar contraseña.</p>
                </div>
                <div class="item_container container1">
                    <h2>PROBLEMAS REGISTRO</h2>
                    <p>Asegúrese de no dejar ningún campo en blanco y colocar bien sus datos personales.</p>
                </div>
            </div>

        </main>
        
        <footer></footer>

        <script src="scripts/header-footer.js"></script>
    </body>
</html>         