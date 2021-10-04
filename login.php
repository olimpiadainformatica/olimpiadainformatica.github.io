<?php
    include 'conexion.php';
    include 'header.php';
    session_start();
    if (isset($_SESSION['dni_logeado'])) {
        header('Location:user_index.php');
    }//Si ya esta logeado que no pueda ingresar a pagina de logeo

    if(isset($_POST['dni'])){
        $dni=$_POST['dni'];
        $pass=md5($_POST['contraseña']);

        $consulta="SELECT dni,password FROM `usuario` WHERE dni=$dni and password='$pass';";
        $sel = $con -> query($consulta);

        if($sel){
            $sel=mysqli_num_rows($sel);

            if($sel == 1){
                session_start();
                $_SESSION['dni_logeado']=$dni;

                header("location:user_index.php");
            }else if($sel == 0){
                echo('<script language="javascript">alert("No se ha encontrado al usuario en el registro!!");</script>');
            }
        }

    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Iniciar Sesión - MedHealth</title>
		<meta charset="UTF-8">
        <meta name="description" content="Olimpiadas INET 2021">
        <meta name="author" content="Acosta Soledad, Cabrera José, Mansilla Franco, Nores Mateo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="style/common.css">
        <link rel="stylesheet" href="style/header-footer.css">
        <link rel="stylesheet" href="style/login.css">
    </head>
    <body>
        <script src="scripts/slider.js" async defer></script>

        <?php $header=header_paginas(); echo($header); ?>

        <main>
            <section id="login_section">
                <h1>INICIA SESIÓN PARA ACCEDER A LOS SERVICIOS</h1>
                <div class="container1" id="form_container">
                    <form id="login_form" method="post">
                        <div class="form_field_container">
                            <input id="dni" type="text" name="dni" placeholder="DNI" class="form_field" required>
                            <label for="dni"><img src="src/inputicons/user_icon.svg" class="form_field_icon"></label>
                        </div>
                        <div class="form_field_container">
                            <input id="password" type="password" name="contraseña" placeholder="Contraseña" class="form_field" required>
                            <label for="password"><img src="src/inputicons/password_icon.svg" class="form_field_icon"></label>
                        </div>
                        <div>
                            <!--<button id="login_btn" type="button" onclick="loginSubmit()">INICIAR SESIÓN</button>-->
                            <input id="login_btn" type="submit" value="INICIAR SESIÓN">
                            <!-- SCRIPT TEMPORAL PARA IR A LA PÁGINA DE INICIO DE USUARIO-->
                            <!--<script>
                                function loginSubmit(){
                                    window.location.href = "user_index.php";
                                }
                            </script>-->
                            <!-- SCRIPT TEMPORAL PARA IR A LA PÁGINA DE INICIO DE USUARIO-->
                        </div>
                        <div>
                            <a id="recover_btn" href="recuperar.php">CAMBIAR CONTRASEÑA</a>
                        </div>
                    </form>
                </div>
                <p style="text-align: center;">Si todavía no tiene una cuenta, presione el botón “Registrarme”</p>
                <div>
                    <a id="register_btn" href="registro.php">REGISTRARME</a>
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