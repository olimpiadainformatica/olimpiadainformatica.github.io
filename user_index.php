<?php
    include 'conexion.php';
    include 'header.php';
    session_start();

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Inicio - CheeseMaker</title>
		<meta charset="UTF-8">
        <meta name="description" content="Olimpiadas INET 2021">
        <meta name="author" content="Acosta Soledad, Cabrera José, Mansilla Franco, Nores Mateo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style/common.css">
        <link rel="stylesheet" href="style/header-footer.css">
        <link rel="stylesheet" href="style/user_index.css">
	</head>
	<body>

        <?php // $dni = $_SESSION['dni_logeado']; $header=header_paginas($dni,$con); echo($header[0]);
        $header=header_paginas(); echo($header); ?>

        <main>
            <h1>Bienvenido <?php // echo($header[1]); ?></h1>
            <div id="info_text">
            </div>
            <div class="container1" id="sections_container">
                <a class="item_container" href="sectores.php">
                    <img src="src/icons/userindex-icono-sectores.png" alt="">
                    <p>Sectores</p>
                </a>
                <a class="item_container" href="empresa.php">
                    <img src="src/icons/userindex-icono-empresa.png" alt="">
                    <p>Sobre la empresa</p>
                </a>
            </div>
        </main>

        <footer></footer>

        <script src="scripts/header-footer.js"></script>
    </body>
</html>