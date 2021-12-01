<?php
    include 'conexion.php';
    include 'header.php';
    session_start();
    // $varsesion= $_SESSION['dni_logeado'];

    // if($varsesion == null || $varsesion = ''){
    //     header("location:login.php");
    // }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sectores - CheeseMaker</title>
		<meta charset="UTF-8">
        <meta name="description" content="Olimpiadas INET 2021">
        <meta name="author" content="Acosta Soledad, Cabrera José, Mansilla Franco, Nores Mateo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style/common.css">
        <link rel="stylesheet" href="style/header-footer.css">
        <link rel="stylesheet" href="style/sectores.css">
    </head>
    <body>
        <?php // $dni = $_SESSION['dni_logeado']; $header=header_paginas($dni,$con); echo($header[0]);
        $header=header_paginas(); echo($header); ?>

        <main>
            <div id="info_text">
                <div id="title_img">
                    <h2>Sectores</h2>
                </div>
            </div>

            <div id="sections_container">
                <a class="item_container" href="sectores_proceso.php">
                    <p>PROCESO</p>
                </a>
                <a class="item_container" href="sectores_produccion.php">
                    <p>PRODUCCIÓN</p>
                </a>
                <a class="item_container" href="sectores_fermentos.php">
                    <p>FERMENTOS</p>
                </a>
            </div>

        </main>
        
        <footer></footer>

        <script src="scripts/header-footer.js"></script>
    </body>
</html>         
