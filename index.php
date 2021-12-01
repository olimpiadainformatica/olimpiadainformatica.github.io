<?php
    include 'header.php';
    session_start();
    if (isset($_SESSION['dni_logeado'])) {
        header('Location:user_index.php');
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>CheeseMaker</title>
		<meta charset="UTF-8">
        <meta name="description" content="Olimpiadas INET 2021">
        <meta name="author" content="Acosta Soledad, Cabrera José, Mansilla Franco, Nores Mateo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

        <link rel="stylesheet" href="style/common.css">
        <link rel="stylesheet" href="style/header-footer.css">
        <link rel="stylesheet" href="style/index.css">
	</head>
	<body>
        
        <?php $header=header_paginas(); echo($header); ?>
        
        <main>
            <div id="index_text">
                <h1>Cheese Maker</h1>
            </div>
            <div id="image_container">
                <img src="src/cheesemaker-banner-home-desktop.jpg" id="index_illustration" alt="">
                <p id="image_text">Naturalmente<br>sin gluten<br>ni lactosa</p>
            </div>
            
        </main>

        <footer></footer>

        <script src="scripts/header-footer.js"></script>
	</body>
</html>