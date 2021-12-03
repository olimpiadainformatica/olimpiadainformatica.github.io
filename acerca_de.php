<?php
    include 'conexion.php';
    include 'header.php';
    session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Acerca de - Cheese Maker</title>
		<meta charset="UTF-8">
        <meta name="description" content="Olimpiadas INET 2021">
        <meta name="author" content="Acosta Soledad, Cabrera José, Mansilla Franco, Nores Mateo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style/common.css">
        <link rel="stylesheet" href="style/header-footer.css">
        <link rel="stylesheet" href="style/acerca_de.css">
    </head>
    <body>

        <?php if(isset($_SESSION['dni_logeado'])){
                 $dni = $_SESSION['dni_logeado'];
                 $header=header_paginas($dni,$con);
                 echo($header[0]);
              }else{
                 echo(header_paginas());
              } ?>

        <main>
            <h1>Desarrolladores de <span id="brand_name">Cheese Maker</span></h1>

            <div class="developer_container">
                <img src="src/developers/soledad.jpg">
                <p class="developer_name">Acosta Soledad</p>
                <span class="separator">&nbsp;</span>
                <p class="roles"><b>Roles:</b> Front-End, Diseño Gráfico, Documentación</p>
            </div>

            <div class="developer_container">
                <img src="src/developers/hidrocarburo.jpg">
                <p class="developer_name">Nores Mateo</p>
                <span class="separator">&nbsp;</span>
                <p class="roles"><b>Roles:</b> Front-End, Back-End, Diseño Móvil</p>
            </div>

            <div class="developer_container">
                <img src="src/developers/glucthu.png">
                <p class="developer_name">Cabrera José</p>
                <span class="separator">&nbsp;</span>
                <p class="roles"><b>Roles:</b> Back-End, BBDD</p>
            </div>

            <div class="developer_container">
                <img src="src/developers/jurius.png">
                <p class="developer_name">Mansilla Franco</p>
                <span class="separator">&nbsp;</span>
                <p class="roles"><b>Roles:</b> Back-End, BBDD</p>
            </div>

        </main>
        
        <footer></footer>

        <script src="scripts/header-footer.js"></script>
    </body>
</html>         