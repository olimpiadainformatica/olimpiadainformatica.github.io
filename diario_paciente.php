<?php
    include 'conexion.php';
    include 'header.php';
    session_start();

    $varsesion= $_SESSION['dni_logeado'];

    if($varsesion == null || $varsesion = ''){
        header("location:login.php");
    }

    //ACTUALIZA LOS CAMPOS INVIDUALMENTE DE CONSULTA
    if(isset($_POST['actualizar'])){
        $lista=array();
        foreach($_POST as $campo => $valor){
            if ($campo !='actualizar'){
                $lista[]=$valor;
                $id_consulta = explode("_", $campo);
            }
        }
        $fecha=$lista[0];
        $motivo=$lista[1];
        $especialidad=$lista[2];

        $id_c = intval($id_consulta[1]);

        $up_c = $con -> query("UPDATE `consulta` SET fecha='$fecha', motivo='$motivo', especialidad='$especialidad'
                        WHERE id_con = $id_c ;");
        error_reporting(0);
    }
    

    //SI EL USUARIO PRESIONA UN SUBMIT CON VALOR GUARDADO, SE PUEDEN DAR DOS COSAS
    if(isset($_POST['guardado'])){
        //SE GUARDAN LOS DATOS ENVIADOS DE POST
        //EL SUBMIT DE AGREGAR CONSULTA Y EL ENFERMEDADES COMPARTEN EL MISMO NAME
        $fecha=$_POST['fecha'];
        $motivo=$_POST['motivo'];
        $especialidad=$_POST['especialidad'];

        $enfermedad=$_POST['enfermedad'];
        $notas=$_POST['notas'];


        //CONSULTA SI EXISTE EN EL USUARIO UN REGISTRO diario_paciente
        $sesion=$_SESSION['dni_logeado'];
        $consulta = "SELECT * FROM `diario_paciente` WHERE dni_d=$sesion;";
        $sel = $con -> query($consulta);
        $sel = mysqli_num_rows($sel);


        //Si no tiene regisro ejecuta lo siguiente, caso contrario no
        if($sel != 1){

            //SE INSERTAN LOS DATOS INICIALES PARA diario_paciente, ASI EL USUARIO PUEDA INGRESAR CONSULTAS Y OTROS DATOS
            $sesion = $_SESSION['dni_logeado'];
            $insercion = "INSERT INTO `diario_paciente` (`id_diario`,`tipo_enfermedad`,`notas`,`dni_d`) VALUES (NULL, '$enfermedad', '$notas', $sesion);";
            $ins = $con -> query($insercion);
            echo(mysqli_error($con));

            //UNA VEZ HECHO LO ANTERIOR, A CONTINUACION SE BUSCA EL id_diario de diario_paciente
            //YA QUE ESTA RELACIONADO A LA TABLA CONSULTA
            $consulta_c = "SELECT id_diario FROM `diario_paciente` WHERE dni_d=$sesion;";
            $sel_c = $con -> query($consulta_c);


            while($fila = $sel_c -> fetch_assoc()){
                $foranea=$fila['id_diario'];//ACA SE OBTIENE id_diario
            }


            //SE INSERTAN LOS DATOS DE consulta JUNTO CON SU LLAVE FORANEA, EN id_diario1
            //QUE ES EL MISMO QUE id_diario DE LA TABLA diario_paciente
            $insercion_c = "INSERT INTO `consulta` (
                `id_con`,
                `fecha`,
                `motivo`,
                `especialidad`,
                `id_diario1`
                ) VALUES (NULL, '$fecha', '$motivo', '$especialidad', $foranea);";
            $ins_c = $con -> query($insercion_c);

        }

        if($sel == 1){//SI EXISTE UN REGISTRO PASA LO SIGUIENTE
            $sesion = $_SESSION['dni_logeado'];

            if($enfermedad != ''){//SI ES QUE LA VARIABLE NO ESTA VACIA

                //CONSULTA DE ENFERMEDAD
                $cons_enf = "SELECT tipo_enfermedad FROM `diario_paciente` WHERE dni_d=$sesion;";
                $sel_enf = $con -> query($cons_enf);

                //SE RECORRE ENFERMEDAD PARA OBTENER EL STRING ORIGINAL
                while($fila = $sel_enf -> fetch_assoc()){
                    $lis_enfermedades=$fila['tipo_enfermedad'];
                    //UNA VEZ OBTENIDO SE LE CONCATENA EL NUEVO STRING DE ENFERMEDAD QUE AGREGO EL USUARIO
                    $enfermedad = $lis_enfermedades . "," . $enfermedad;
                }

                //SE HACE LA OPERACION PARA ACTUALIZAR EL CAMPO STRING DE ENFERMEDAD
                $actualizar_d = "UPDATE `diario_paciente` SET `tipo_enfermedad` = '$enfermedad',
                `notas` = '$notas' WHERE dni_d =$sesion";
                $ins_u_d = $con -> query($actualizar_d);


            }elseif($enfermedad == '' && $notas != ''){//SI LOS CAMPOS DE diario_paciente NO ESTAN VACIOS

                //SIMPLEMENTE SE ACTUALIZAN LOS CAMPOS DE diario_paciente, tanto enfermedad, como notas
                $actualizar_d = "UPDATE `diario_paciente` SET `notas` = '$notas' WHERE dni_d =$sesion";
                $ins_u_d = $con -> query($actualizar_d);
            }

            $consulta_c = "SELECT id_diario FROM `diario_paciente` WHERE dni_d=$sesion;";
            $sel_c = $con -> query($consulta_c);

            //OBTENEMOS LA CLAVE FORANEA, SIENDO ESTA RELACIONADA CON id_diario
            while($fila = $sel_c -> fetch_assoc()){
                $foranea=$fila['id_diario'];
            }


            if($fecha != '' && $motivo != '' && $especialidad != ''){//SI TODOS LOS CAMPOS DE consulta NO ESTAN VACIOS

                //INSERTAMOS LOS DATOS AGREGADOS DEL USUARIO CON LA LLAVE FORANEA SACADA DEL WHILE RECIENTE
                $insercion_c = "INSERT INTO `consulta` (
                    `id_con`,
                    `fecha`,
                    `motivo`,
                    `especialidad`,
                    `id_diario1`
                    ) VALUES (NULL, '$fecha', '$motivo', '$especialidad', $foranea);";
                $ins_c = $con -> query($insercion_c);


            }else if($fecha == '' && ($motivo != '' || $especialidad != '')){//MENSAJE DE ERROR SI LOS CAMPOS CONSULTA ESTAN VACIOS

                echo('<script language="javascript">alert("Por favor Ingrese la fecha de consulta, muchas gracias.")</script>');

            }else if($fecha != '' && ($motivo == '' || $especialidad == '')){////MENSAJE DE ERROR SI LOS CAMPOS motivo O especialidad ESTAN VACIOS

                echo('<script language="javascript">alert("Faltan campos por completar en su nueva consulta")</script>');

            }
            
        }

    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="description" content="Olimpiadas INET 2021">
    <meta name="author" content="Acosta Soledad, Cabrera José, Mansilla Franco, Nores Mateo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/common.css">
    <link rel="stylesheet" href="style/header-footer.css">
    <link rel="stylesheet" href="style/diario_paciente.css">
    <link href="https://allfont.es/allfont.css?fonts=sansation-regular" rel="stylesheet" type="text/css" />


    <title> Diario Paciente - MedHealth </title>
</head>

<body>
    <?php $dni = $_SESSION['dni_logeado']; $header=header_paginas($dni,$con); echo($header[0]); ?>
    <main>
        <div id="diario">
            <img src="src/icons/diario - paciente.svg">
            <p>
                DIARIO PACIENTE
            </p>
        </div>
        <div id="consultas">
            <p>
                Consultas
            </p>
        </div>
        <table class="tablas">
            <tr>
                <th> Fecha </th>
                <th> Motivo </th>
                <th> Especialidad </th>
            </tr>
            
                <?php

                    //CONSULTA SI EXISTE EN EL USUARIO UN REGISTRO diario_paciente
                    $sesion = $_SESSION['dni_logeado'];
                    $con_id = "SELECT id_diario FROM `diario_paciente` WHERE dni_d=$sesion;";
                    $sel_c = $con -> query($con_id);
                    $sel_c = mysqli_num_rows($sel_c);

                ######################### MUESTREO CONSULTAS ####################################
                    //Si no tiene regisro no ejecuta estos WHILES, caso contrario si
                    if($sel_c!=0){
                    $sel_c = $con -> query($con_id);

                    while($fila = $sel_c -> fetch_assoc()){//Saco la clave relacionada de id_diario
                        $foranea=$fila['id_diario'];
                    }

                        //EN ESTA PARTE CONSULTO PARA QUE ME MUESTRE TODOS LOS CAMPOS DE consulta,
                        //SEGUN ESTEN RELACIONADOS A LA TABLA diario_paciente mediante el id_diario
                        $consulta="SELECT id_con, fecha, motivo, especialidad
                                    FROM `diario_paciente`
                                    INNER JOIN `consulta` ON ( `diario_paciente`.id_diario = `consulta`.id_diario1 )
                                    WHERE id_diario =$foranea";
                        $sel = $con -> query($consulta);

                    //RECORRO TODOS LOS CAMPOS DE CONSULTA PARA MOSTRARLOS
                    while($fila = $sel -> fetch_assoc()){ ?>
                    <form method='post'>
                    <tr>
                        <td><input type="date" name="fecha_<?php echo($fila['id_con']) ?>" value="<?php echo($fila['fecha']) ?>" /></td><!-- muestra la fecha y su name se relaciona con su id -->
                        <td><input type="text" name="motivo_<?php echo($fila['id_con']) ?>" value="<?php echo($fila['motivo']) ?>"/></td><!-- muestra la fecha y su name se relaciona con su id -->
                        <td><input type="text" name="especialidad_<?php echo($fila['id_con']) ?>" value="<?php echo($fila['especialidad']) ?>"/></td><!-- muestra la fecha y su name se relaciona con su id -->
                        <td><a href="eliminar_consulta.php?id=<?php echo($fila['id_con']); ?>">Eliminar</a></td><!--Aca esta el link para eliminar esta fila de consulta -->
                        <td><input type="submit" name="actualizar" value="Actualizar"></td><!--Actualiza los campos mediante el name 'actualizar' -->
                    </tr>
                    </form>
                <?php } } 
                #################### FIN DE MUESTREO DE CONSULTAS ##############################?>
                    
        <form method="post">
            <tr><!--FILA SOLO PARA QUE EL USUARIO AGREGE MAS CONSULTAS SI LO DESEA-->
                <td><input type="date" name="fecha"/></td>
                <td><input type="text" name="motivo"/></td>
                <td><input type="text" name="especialidad"/></td>
                <td><input type="submit" name="guardado" value="Agregar Consulta"></td>
            </tr>
        </table>

            <div id="enfermedades">
                <p>
                    Enfermedades diagnosticadas
                </p>
            </div>

            <?php
                //CONSULTA SI EXISTE EN EL USUARIO UN REGISTRO diario_paciente
                $varsesion= $_SESSION['dni_logeado'];
                $consulta="SELECT id_diario, tipo_enfermedad, notas FROM `diario_paciente` 
                            WHERE dni_d=$varsesion;";
                $sel = $con -> query($consulta);
                $sel = mysqli_num_rows($sel);
                
            ######################### MUESTREO ENFERMEDADES ####################################
                //Si no tiene regisro no ejecuta estos WHILES, caso contrario si
                if($sel!=0){
                    $sel = $con -> query($consulta);
                while($fila = $sel -> fetch_assoc()){//RECORRE diario_paciente
                    $lista_e = explode(",", $fila['tipo_enfermedad']);//CREO UN ARRAY CON LAS ENFERMEDADES SEPARADAS POR COMAS ?>

                    <div id="listadehacer">
                        <ul>
                        <?php for($i=0; $i < count($lista_e);$i++){//RECORRO EL ARRAY DE ENFERMEDADES ?>
                            <?php if($lista_e[$i]!=''){//VERIFICO QUE NINGUN DATO DEL ARRAY ESTE VACIO ?>
                            <li type="square">
                                <div class="lista-enfermedad">
                                    <input type="text" value="<?php echo($lista_e[$i]); ?>" disabled/><!--Y AQUI MUESTRO LA ENFERMEDAD-->
                                </div>
                                <div class="lista-enfermedad">
                                    <!--ACA ESTA EL LINK PARA ELIMINAR UN STRING DE ENFERMEDAD, SI O SI DEBE SER UN ELEMENTO 'a'-->
                                    <a href="eliminar_enfermedad.php?id=<?php echo($fila['id_diario'] . "," . $lista_e[$i]); ?>">Eliminar</a>
                                </div>
                            </li>
                        <?php } } ?>
                        <?php $nota=$fila['notas']; } } ?><!--Linea para guardar la nota en una variable que hara su muestreo-->
            <?php ######################### FIN DE MUESTREO ENFERMEDADES #################################### ?>
                            <li type="square"><input type="text" name="enfermedad"/></li>
                        </ul>
                    </div>
            <div id="notas">
                <p>
                    Notas para no olvidar
                </p>
            </div>
            
            <!--ACA SE MUESTRA EL CAMPO NOTA DE LA BD MEDIANTE UNA VARIABLE, 
            EN CASO QUE LA VARIABLE HAYA SIDO DECLARADA ANTERIORMENTE en el MUESTREO DE ENFERMEDADES-->
            <p><textarea name="notas"><?php if(isset($nota)){echo($nota);} ?></textarea></p>
            <br>
            <input type="submit" name="guardado" value="Guardar Datos">
        </form>
       

    </main>

    <footer></footer>

    <script src="style/header-footer.js"></script>
</body>

</html>

