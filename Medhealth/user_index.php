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
		<title>Inicio - MedHealth</title>
		<meta charset="UTF-8">
        <meta name="description" content="Olimpiadas INET 2021">
        <meta name="author" content="Acosta Soledad, Cabrera José, Mansilla Franco, Nores Mateo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style/common.css">
        <link rel="stylesheet" href="style/header-footer.css">
        <link rel="stylesheet" href="style/user_index.css">
	</head>
	<body>

        <?php $dni = $_SESSION['dni_logeado']; $header=header_paginas($dni,$con); echo($header[0]); ?>

        <main>
            <h1>Bienvenido <?php echo($header[1]); ?></h1>
            <div id="info_text">
                <img src="src/icons/info_icon.svg" alt="">
                <p>Haga clic en una sección para ver más información</p>
            </div>
            <div class="container1" id="sections_container">
                <a class="item_container" href="datos_clinicos.php">
                    <img src="src/icons/clinicaldata_icon.svg" alt="">
                    <p>Datos Clínicos</p>
                </a>
                <a class="item_container" href="estadisticas.php">
                    <img src="src/icons/covidstatistics_icon.svg" alt="">
                    <p>Covid-19 Estadísticas</p>
                </a>
                <a class="item_container" href="protocolos.php">
                    <img src="src/icons/protocols_icon.svg" alt="">
                    <p>Protocolos Actuales</p>
                </a>
                <a class="item_container" href="estilo_vida.php">
                    <img src="src/icons/lifestyle_icon.svg" alt="">
                    <p>Estilo de Vida</p>
                </a>
                <a class="item_container" href="tipos_enfermedades.php">
                    <img src="src/icons/diseases_icon.svg" alt="">
                    <p>Tipos de Enfermedades</p>
                </a>
                <a class="item_container" href="contacto_medico.php">
                    <img src="src/icons/contact_icon.svg" alt="">
                    <p>Contacto Médico</p>
                </a>
            </div>
        </main>

        <footer></footer>

        <script src="scripts/header-footer.js"></script>
    </body>
</html>