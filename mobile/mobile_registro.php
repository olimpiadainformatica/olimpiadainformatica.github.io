<?php
    include '../conexion.php';
    include '../header.php';
    session_start();
    if (isset($_SESSION['dni_logeado'])) {
        header('Location:mobile_user_index.php');
    }

    function buscar_dni_repetido($dni,$conexion){
        $sql="SELECT * FROM usuario WHERE dni=$dni;";
        $sel = $conexion -> query($sql);

        if(mysqli_num_rows($sel)>=1){
            return 1;
        }else{
            return 0;
        }
    }

    if(isset($_POST['nombre'])){
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $email=$_POST['email'];
        $dni=$_POST['dni'];
        $pass=md5($_POST['contraseña']);

        if(buscar_dni_repetido($dni,$con)==0){
            $consulta = "INSERT INTO `usuario` (
                `id_u` ,
                `nombre` ,
                `apellido` ,
                `dni` ,
                `password` ,
                `correo`
                )
                VALUES (
                NULL , '$nombre', '$apellido', $dni, '$pass', '$email'
                );";
            $ins = $con -> query($consulta);
            if($ins){
                header("location:mobile_login.php");
            }else{
                echo('<script language="javascript">alert("Ha ocurrido un error en el registro!!");window.location.href="mobile_registro.php"</script>');
            }
        }else{
            echo('<script language="javascript">alert("El DNI ingresado ya existe, por favor Ingrese otro.")</script>');
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Registro - MedHealth</title>
		<meta charset="UTF-8">
        <meta name="description" content="Olimpiadas INET 2021">
        <meta name="author" content="Acosta Soledad, Cabrera José, Mansilla Franco, Nores Mateo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="stylesheet" href="../style/mobile/mobile_common.css">
        <link rel="stylesheet" href="../style/mobile/mobile_registro.css">
        <link rel="stylesheet" href="../style/mobile/mobile_header-footer.css">
    </head>
    <body>
        <script src="../scripts/registro.js" async defer></script>

        <header>
            <navbar>
                <a href="mobile_login.php">Atrás</a>
            </navbar>
        </header>

        <main>
            
            <h1 class="container1">Registro de usuario</h1>
            <div id="form_container" class="container1">
                <form id="register_form" method="post">
                    <div>
                        <h2 class="form_section_title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Información Personal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
                        <span class="form_section_title_bar">&nbsp;</span>
                    </div>
                    <div class="form_field_container">
                        <input id="name" type="text" name="nombre" placeholder='Nombre' class="form_field" <?php if(isset($_POST['nombre'])) echo("value='$nombre'"); ?> required>
                        <label for="name"><img src="../src/inputicons/user_icon.svg" class="form_field_icon"></label>
                    </div>
                    <div class="form_field_container">
                        <input id="surname" type="text" name="apellido" placeholder="Apellido" class="form_field" <?php if(isset($_POST['apellido'])) echo("value='$nombre'"); ?> required>
                        <label for="surname"><img src="../src/inputicons/user_icon.svg" class="form_field_icon"></label>
                    </div>
                    <div class="form_field_container">
                        <input id="email" type="email" name="email" placeholder="Correo electrónico" class="form_field" <?php if(!empty($_POST['register_email'])){$email=$_POST['register_email'];echo("value='$email'");} ?> <?php if(isset($_POST['email'])) echo("value='$email'"); ?> required>
                        <label for="email"><img src="../src/inputicons/email_icon.svg" class="form_field_icon"></label>
                    </div>
                    <div class="form_field_container">
                        <input id="dni" type="number" name="dni" placeholder="DNI" class="form_field" required>
                        <label for="dni"><img src="../src/inputicons/user_icon.svg" class="form_field_icon"></label>
                    </div>

                    <div>
                        <h2 class="form_section_title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Seguridad&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
                        <span class="form_section_title_bar">&nbsp;</span>
                    </div>
                    <div class="form_field_container">
                        <input id="password" type="password" name="contraseña" placeholder="Contraseña" class="form_field" required>
                        <label for="password"><img src="../src/inputicons/password_icon.svg" class="form_field_icon"></label>
                    </div>
                    <div class="form_field_container">
                        <input id="checkpassword" type="password" name="confirmarcontraseña" placeholder="Repetir contraseña" class="form_field" required>
                        <label for="checkpassword"><img src="../src/inputicons/password_icon.svg" class="form_field_icon"></label>
                    </div>
                    <div id="toe_field_container">
                        <input id="toe" type="checkbox" name="toe" required>
                        <label for="toe">Yo he leído y estoy de acuerdo con los Términos del Servicio y Condiciones de Uso</label>
                    </div>
                    <div>
                        <button id="register_btn" type="button" onclick="submitForm()">REGISTRARSE</button>
                    </div>
                    <p>&nbsp;</p>
                    <p id="submit_alert">Las contraseñas no coinciden</p>
                </form>
            </div>
        </main>
    </body>
</html>