<?php
    include 'conexion.php';
    include 'header.php';
    session_start();
    if (isset($_SESSION['dni_logeado'])) {
        header('Location:user_index.php');
    }

    if(isset($_POST['dni'])){
        //declarando los datos enviados de post en variables
        $dni=$_POST['dni'];
        $pass=md5($_POST['contraseña_actual']);
        $pass_nueva=md5($_POST['contraseña_nueva']);

        //Buscando si hay un registro en usuario con el dni y contraseña enviados de post
        $consulta="SELECT dni,password FROM `usuario` WHERE dni=$dni and password='$pass';";
        $sel = $con -> query($consulta);

        if($sel){
            $sel=mysqli_num_rows($sel);

            if($sel == 1){

                //ACTUALIZA AL LA CONTRASEÑA DEL USUARIO Y REDIRECCIONA A LA PAGINA login.php
                $consulta="UPDATE `usuario` SET password = '$pass_nueva' WHERE dni = $dni ;";
                $up = $con -> query($consulta);
                header("location:login.php");
            }else if($sel == 0){
                //SI NO HAY REGISTROS MUESTRA ESTA ALERTA
                echo('<script language="javascript">alert("No se ha podido encontrar al usuario en el registro!!, DNI o Contraseña incorrectos.");</script>');
            }
        }

    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cambiar Contraseña - MedHealth</title>
		<meta charset="UTF-8">
        <meta name="description" content="Olimpiadas INET 2021">
        <meta name="author" content="Acosta Soledad, Cabrera José, Mansilla Franco, Nores Mateo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style/common.css">
        <link rel="stylesheet" href="style/header-footer.css">
        <link rel="stylesheet" href="style/recuperar.css">
        <link rel="stylesheet" href="style/login.css">
    </head>
    <body>
        <script src="scripts/slider.js" async defer></script>
        <script src="scripts/recover.js" async defer></script>

        <?php $header=header_paginas(); echo($header); ?>

        <main>
            <section id="recover_section">
                <h1>CAMBIE SU CONTRASEÑA</h1>
                <div class="container1" id="form_container">
                    <form id="recover_form" method='post'>
                        <div class="form_field_container">
                            <input id="dni" type="text" name="dni" placeholder="DNI" class="form_field" required>
                            <label for="dni"><img src="src/inputicons/user_icon.svg" class="form_field_icon"></label>
                        </div>
                        <div class="form_field_container">
                            <input type="password" name="contraseña_actual" placeholder="Actual Contraseña" class="form_field" required>
                            <label for="password"><img src="src/inputicons/password_icon.svg" class="form_field_icon"></label>
                        </div>
                        <div class="form_field_container">
                            <input id="password" type="password" name="contraseña_nueva" placeholder="Nueva contraseña" class="form_field" required>
                            <label for="password"><img src="src/inputicons/password_icon.svg" class="form_field_icon"></label>
                        </div>
                        <div class="form_field_container">
                            <input id="checkpassword" type="password" name="repetir_contraseña" placeholder="Repetir contraseña" class="form_field" required>
                            <label for="checkpassword"><img src="src/inputicons/password_icon.svg" class="form_field_icon"></label>
                        </div>
                        <div>
                            <button id="recover_btn" type="button" onclick="recoverSubmit()">CAMBIAR CONTRASEÑA</button>
                        </div>
                        <p id="submit_alert">Las contraseñas no coinciden</p>
                    </form>
                </div>
            </section>
            <span id="vertical_line"></span>
            <section id="slider_section">
                <span id="slider_img">CONTACTO MÉDICO</span>
                <span id="left_button" onclick="previousPicture()"></span>
                <span id="right_button" onclick="nextPicture()"></span>
            </section>
            </div>
        </main>

        <footer></footer>

        <script src="scripts/header-footer.js"></script>
    </body>
</html>