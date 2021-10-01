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
        <link rel="stylesheet" href="style/datos_clinicos_datos.css">
    </head>
    <body>
        <?php $dni = $_SESSION['dni_logeado']; $header=header_paginas($dni,$con); echo($header[0]); ?>

        <main>
            <p id="list_header">
                <b>Consulta ficha del paciente:</b> Introduzca N° historia / paciente / código
            </p>
            <div class="data_field" style="grid-column: 1/3">
                <p class="data_field_title">DNI</p>
                <p class="data_field_info">12345678</p>
            </div>
            <div class="data_field">
                <p class="data_field_title">Apellidos</p>
                <p class="data_field_info">Velazquez Vallejos</p>
            </div>
            <div class="data_field">
                <p class="data_field_title">Nombres</p>
                <p class="data_field_info">Andres Ariel</p>
            </div>
            <div class="data_field">
                <p class="data_field_title">F. Nacimiento</p>
                <p class="data_field_info">15/04/2000</p>
            </div>
            <div class="data_field">
                <p class="data_field_title">Sexo</p>
                <p class="data_field_info">Masculino</p>
            </div>
            <div class="data_field">
                <p class="data_field_title">Email</p>
                <p class="data_field_info">VelazquezAndres@gmail.com</p>
            </div>
            <div class="data_field">
                <p class="data_field_title">N° S. social</p>
                <p class="data_field_info">28 12345678 40</p>
            </div>
            <div class="data_field">
                <p class="data_field_title">Provincia</p>
                <p class="data_field_info">Buenos Aires</p>
            </div>
            <div class="data_field">
                <p class="data_field_title">Localidad</p>
                <p class="data_field_info">Ramos Mejía</p>
            </div>
            <div class="data_field">
                <p class="data_field_title">Dirección</p>
                <p class="data_field_info">9 de Julio, 1928</p>
            </div>
            <div class="data_field">
                <p class="data_field_title">C. Postal</p>
                <p class="data_field_info">1704</p>
            </div>
            <div class="horizontal_line"></div>
            <div class="data_field">
                <p class="data_field_title">F. Consulta</p>
                <p class="data_field_info">19/08/2021</p>
            </div>
            <div class="data_field">
                <p class="data_field_title">F. Alta</p>
                <p class="data_field_info">5/09/2021</p>
            </div>
            <div class="data_field" style="grid-column: 1/3">
                <p class="data_field_title">Duración Proceso</p>
                <p class="data_field_info">17 días</p>
            </div>
            <div class="big_data_field">
                <p class="data_field_title">Diagnóstico</p>
                <p class="big_data_field_info">Texto</p>
            </div>
            <div class="big_data_field">
                <p class="data_field_title">Tratamiento</p>
                <p class="big_data_field_info">Texto</p>
            </div>
            <div class="big_data_field">
                <p class="data_field_title">Otros datos de interés</p>
                <p class="big_data_field_info">Texto</p>
            </div>
            <div class="big_data_field">
                <p class="data_field_title">Observaciones | Notas</p>
                <p class="big_data_field_info">Texto</p>
            </div>
        </main>

        <footer></footer>
        <script src="scripts/header-footer.js"></script>
    </body>
</html>
