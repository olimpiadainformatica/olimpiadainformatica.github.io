<?php
    include '../conexion.php';
    include '../header.php';
    session_start();
    $varsesion= $_SESSION['dni_logeado'];

    if($varsesion == null || $varsesion = ''){
        header("location:mobile_login.php");
    }

    $sesion=$_SESSION['dni_logeado'];
    $consulta = "SELECT * FROM `u_direccion` WHERE dni_dir=$sesion;";
    $sel = $con -> query($consulta);
    $sel = mysqli_num_rows($sel);

    if($sel != 1){
        $sesion = $_SESSION['dni_logeado'];
        $insercion = "INSERT INTO `u_direccion` (
            `id_direccion`,
            `calle_numero`,
            `localidad`,
            `codigo_postal`,
            `provincia`,
            `dni_dir`
            ) VALUES (NULL, NULL, NULL, NULL, NULL, $sesion);";
        $ins = $con -> query($insercion);
    }

    if(isset($_POST['edicion'])){
        $editar="habilitado";
    }

    if(isset($_POST['guardado'])){
        $apellido=$_POST['apellido'];
        $nombre=$_POST['nombre'];
        $f_nacimiento=$_POST['f_nacimiento'];
        $sexo=$_POST['sexo'];
        $email=$_POST['email'];
        $n_s_social=$_POST['n_s_social'];
        $direccion=$_POST['direccion'];
        $localidad=$_POST['localidad'];
        $c_postal=$_POST['c_postal'];
        $provincia=$_POST['provincia'];
        
        $sesion = $_SESSION['dni_logeado'];
        $actualizar_u = "UPDATE `usuario` SET
            `apellido`='$apellido',
            `nombre`='$nombre',
            `correo`='$email',
            `sexo`='$sexo',
            `f_nacimiento`='$f_nacimiento',
            `n_s_social`= $n_s_social
        WHERE dni=$sesion;";
        $ins_u = $con -> query($actualizar_u);

        $actualizar_u_d = "UPDATE `u_direccion` SET
            `calle_numero`='$direccion',
            `localidad`='$localidad',
            `codigo_postal`=$c_postal,
            `provincia`='$provincia'
        WHERE dni_dir=$sesion;";
        $ins_u_d = $con -> query($actualizar_u_d);

        $editar='';
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Datos Clínicos - MedHealth</title>
		<meta charset="UTF-8">
        <meta name="description" content="Olimpiadas INET 2021">
        <meta name="author" content="Acosta Soledad, Cabrera José, Mansilla Franco, Nores Mateo">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="stylesheet" href="../style/mobile/mobile_common.css">
        <link rel="stylesheet" href="../style/mobile/mobile_header-footer.css">
        <link rel="stylesheet" href="../style/mobile/mobile_datos_clinicos_datos.css">
    </head>
    <body>
        <?php $dni = $_SESSION['dni_logeado']; $header=header_paginas($dni,$con); ?>

        <header>
            <navbar>
                <a href="mobile_datos_clinicos.php">Atrás</a>
                <img src="../src/icons/clinicaldata_icon.svg">
            </navbar>
        </header>

        <main>
            <form method="post">
                <p id="list_header">
                    <b>Consulta ficha del paciente:</b> Introduzca N° historia / paciente / código
                </p>
                <?php 
                    $varsesion= $_SESSION['dni_logeado'];
                    $consulta="SELECT * FROM `usuario` WHERE dni=$varsesion;";
                    $sel = $con -> query($consulta);
                    while($fila = $sel -> fetch_assoc()){ ?>

                        <div class="data_field">
                            <p class="data_field_title">DNI</p>
                            <input type="text" value="<?php echo($fila['dni']); ?>" class="data_field_info" disabled>
                        </div>
                        <div class="data_field">
                            <p class="data_field_title">Apellidos</p>
                            <input type="text" name="apellido" value="<?php echo($fila['apellido']); ?>" class="data_field_info" <?php if(empty($editar) || $editar==''){echo("disabled");} ?> >
                        </div>
                        <div class="data_field">
                            <p class="data_field_title">Nombres</p>
                            <input type="text" name="nombre" value="<?php echo($fila['nombre']); ?>" class="data_field_info" <?php if(empty($editar) || $editar==''){echo("disabled");} ?> >
                        </div>
                        <div class="data_field">
                            <p class="data_field_title">F. Nacimiento</p>
                            <input type="date" name="f_nacimiento" value="<?php echo($fila['f_nacimiento']); ?>" class="data_field_info" <?php if(empty($editar) || $editar==''){echo("disabled");} ?> >
                        </div>
                        <div class="data_field">
                            <p class="data_field_title">Sexo</p>
                            <select name="sexo" class="data_field_info" <?php if(empty($editar) || $editar==''){echo("disabled");} ?> >
                                <?php if($fila['sexo']=="Masculino"){

                                    echo("<option value='Masculino' selected>Masculino</option>
                                         <option value='Femenino'>Femenino</option>");

                                }elseif($fila['sexo']=="Femenino"){

                                    echo("<option value='Masculino'>Masculino</option>
                                         <option value='Femenino' selected>Femenino</option>");

                                }else{
                                    echo("<option value='Masculino'>Masculino</option>
                                          <option value='Femenino'>Femenino</option>");
                                }
                                
                                ?>
                            </select>
                        </div>
                        <div class="data_field">
                            <p class="data_field_title">Email</p>
                            <input type="email" name="email" value="<?php echo($fila['correo']); ?>" class="data_field_info" <?php if(empty($editar) || $editar==''){echo("disabled");} ?> >
                        </div>
                        <div class="data_field">
                            <p class="data_field_title">N° S. social</p>
                            <input type="number" name="n_s_social" value="<?php echo($fila['n_s_social']); ?>" class="data_field_info" <?php if(empty($editar) || $editar==''){echo("disabled");} ?> >
                        </div>
                <?php } ?>

                <?php 
                    $varsesion= $_SESSION['dni_logeado'];
                    $c_direccion="SELECT * FROM `u_direccion` WHERE dni_dir=$varsesion;";
                    $sel = $con -> query($c_direccion);
                    while($fila = $sel -> fetch_assoc()){ ?>
                    
                        <div class="data_field">
                            <p class="data_field_title">Dirección</p>
                            <input type="text" name="direccion" value="<?php echo($fila['calle_numero']); ?>" class="data_field_info" <?php if(empty($editar) || $editar==''){echo("disabled");} ?> >
                        </div>
                        <div class="data_field">
                            <p class="data_field_title">Localidad</p>
                            <input type="text" name="localidad" value="<?php echo($fila['localidad']); ?>" class="data_field_info" <?php if(empty($editar) || $editar==''){echo("disabled");} ?> >
                        </div>
                        <div class="data_field">
                            <p class="data_field_title">C. Postal</p>
                            <input type="number" name="c_postal" value="<?php echo($fila['codigo_postal']); ?>" class="data_field_info" <?php if(empty($editar) || $editar==''){echo("disabled");} ?> >
                        </div>
                        <div class="data_field">
                            <p class="data_field_title">Provincia</p>
                            <input type="text" name="provincia" value="<?php echo($fila['provincia']); ?>" class="data_field_info" <?php if(empty($editar) || $editar==''){echo("disabled");} ?> >
                        </div>
                <?php } ?>
                <div class="data_field">
                    <input type="submit" name="edicion" value="Editar" id="submit_edit_btn">
                    <input type="submit" name="guardado" value="Guardar" id="submit_save_btn" <?php if(empty($editar) || $editar==''){echo("disabled");} ?>>
                </div>
                <div class="horizontal_line"></div>
                <div class="data_field">
                    <p class="data_field_title">F. Consulta</p>
                    <p class="data_field_info">19/08/2021</p>
                </div>
                <div class="data_field">
                    <p class="data_field_title">F. Alta</p>
                    <p class="data_field_info">5/09/2021</p>
                </div>
                <div class="data_field">
                    <p class="data_field_title">Duración Proceso</p>
                    <p class="data_field_info">17 días</p>
                </div>
                <div class="big_data_field">
                    <p class="data_field_title">Diagnóstico</p>
                    <p class="big_data_field_info">Texto</p>
                </div>
                <div class="big_data_field">
                    <p class="data_field_title">Tratamiento</p>
                    <p class="big_data_field_info">Texto</p>
                </div>
                <div class="big_data_field">
                    <p class="data_field_title">Otros datos de interés</p>
                    <p class="big_data_field_info">Texto</p>
                </div>
                <div class="big_data_field">
                    <p class="data_field_title">Observaciones | Notas</p>
                    <p class="big_data_field_info">Texto</p>
                </div>
            </form>
        </main>

        <footer></footer>
        <script src="scripts/header-footer.js"></script>
    </body>
</html>
