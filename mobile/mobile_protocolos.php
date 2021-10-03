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
        <title>Protocolos - MedHealth</title>
		<meta charset="UTF-8">
        <meta name="description" content="Olimpiadas INET 2021">
        <meta name="author" content="Acosta Soledad, Cabrera José, Mansilla Franco, Nores Mateo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="stylesheet" href="../style/mobile/mobile_common.css">
        <link rel="stylesheet" href="../style/mobile/mobile_header-footer.css">
        <link rel="stylesheet" href="../style/mobile/mobile_protocolos.css">
    </head>
    <body>
        
        <?php $dni = $_SESSION['dni_logeado']; $header=header_paginas($dni,$con); ?>

        <header>
            <navbar>
                <a href="mobile_user_index.php">Atrás</a>
                <img src="../src/icons/protocols_icon.svg">
            </navbar>
        </header>

        <main>
            <p id="info_text">
                Alude a la situación general que se contempla a nivel mundial respecto a la
                sanidad que se debe mantener en los diferentes establecimientos y lugares públicos.
            </p>

            <div id="protocols">
                <div class="protocol_item">
                    <img src="../src/protocols/jacket.svg" alt="">
                    <p>Al salir, póngase una chaqueta de manga larga.</p>
                </div>
                <div class="protocol_item">
                    <img src="../src/protocols/hair.svg" alt="">
                    <p>Recógase el pelo, no lleve  aretes, pulseras o anillos.</p>
                </div>
                <div class="protocol_item">
                    <img src="../src/protocols/facemask.svg" alt="">
                    <p>Si tiene mascarilla, póngasela antes de salir.</p>
                </div>
                <div class="protocol_item">
                    <img src="../src/protocols/dog.svg" alt="">
                    <p>Si vas con tu mascota, procura que no rose con ninguna superficie.</p>
                </div>
                <div class="protocol_item">
                    <img src="../src/protocols/creditcard.svg" alt="">
                    <p>Intenta no pagar en efectivo, y en ese caso desinfecta tus manos.</p>
                </div>
                <div class="protocol_item">
                    <img src="../src/protocols/sneeze.svg" alt="">
                    <p>Lleva pañuelos y úselos para no tocar superficies exteriores.</p>
                </div>
                <div class="protocol_item">
                    <img src="../src/protocols/distance.svg" alt="">
                    <p>Manténgase a varios metros de distancia con el resto de gente.</p>
                </div>
                <div class="protocol_item">
                    <img src="../src/protocols/handwashing.svg" alt="">
                    <p>Lava tus manos tras tocar cualquier superficie u objeto.</p>
                </div>
            </div>

        </main>
        
    </body>
</html>         