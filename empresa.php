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
        <title>Covid-19 Estadísticas - MedHealth</title>
		<meta charset="UTF-8">
        <meta name="description" content="Olimpiadas INET 2021">
        <meta name="author" content="Acosta Soledad, Cabrera José, Mansilla Franco, Nores Mateo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style/common.css">
        <link rel="stylesheet" href="style/header-footer.css">
        <link rel="stylesheet" href="style/empresa.css">
    </head>
    <body>
        <?php //$dni = $_SESSION['dni_logeado']; $header=header_paginas($dni,$con); echo($header[0]);
        $header=header_paginas(); echo($header); ?>

        <main>

            <div id="about_text">
                <div>
                    <h2>SOBRE NUESTRA EMPRESA</h2>
                    <p>
                    En una ciudad de nuestro país, situada en un clima templado cuenta una población de 6557 habitantes
                    (INDEC, 2010), siendo su economía netamente agropecuaria. La producción industrial deriva de ella,
                    con cremerías, tambos, fábrica de maquinaria agrícola y fábrica de quesos entre otras. Se emplazada
                    a 14km del casco urbano una fábrica de quesos que lleva más de 40 años produciendo calidad a un
                    ritmo tradicional y con poca innovación tecnológica en los últimos 15 años.
                    </p>
                </div>
            </div>
        </main>
        
        <footer></footer>

        <script src="scripts/header-footer.js"></script>
    </body>
</html>         