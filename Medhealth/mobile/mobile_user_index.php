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
		<title>Inicio - MedHealth</title>
		<meta charset="UTF-8">
        <meta name="description" content="Olimpiadas INET 2021">
        <meta name="author" content="Acosta Soledad, Cabrera José, Mansilla Franco, Nores Mateo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="stylesheet" href="../style/mobile/mobile_common.css">
        <link rel="stylesheet" href="../style/mobile/mobile_header-footer.css">
        <link rel="stylesheet" href="../style/mobile/mobile_user_index.css">
	</head>
	<body>

        <script>
            window.AppInventor.setWebViewString("medhealth-server")
        </script>

        <?php $dni = $_SESSION['dni_logeado']; $header=header_paginas($dni,$con); ?>

        <header>
            <navbar>
                <a></a>
                <a href="mobile_cerrar_sesion.php">Cerrar Sesión</a>
            </navbar>
        </header>

        <main>
            <h1>Bienvenido <?php echo($header[1]); ?></h1>
            <div id="info_text">
                <img src="src/icons/info_icon.svg" alt="">
                <p>Haga clic en una sección para ver más información</p>
            </div>
            <div id="sections_container">
                <a class="item_container" href="mobile_datos_clinicos.php">
                    <img src="../src/icons/clinicaldata_icon.svg" alt="">
                    <p>Datos clínicos</p>
                </a>
                <a class="item_container" href="mobile_estadisticas.php">
                    <img src="../src/icons/covidstatistics_icon.svg" alt="">
                    <p>Covid-19 Estadísticas</p>
                </a>
                <a class="item_container" href="mobile_protocolos.php">
                    <img src="../src/icons/protocols_icon.svg" alt="">
                    <p>Protocolos Actuales</p>
                </a>
                <a class="item_container" href="mobile_estilo_vida.php">
                    <img src="../src/icons/lifestyle_icon.svg" alt="">
                    <p>Estilo de Vida</p>
                </a>
                <a class="item_container" href="mobile_tipos_enfermedades.php">
                    <img src="../src/icons/diseases_icon.svg" alt="">
                    <p>Tipos de Enfermedades</p>
                </a>
                <a class="item_container" href="mobile_contacto_medico.php">
                    <img src="../src/icons/contact_icon.svg" alt="">
                    <p>Contacto Médico</p>
                </a>
            </div>
        </main>

    </body>
</html>