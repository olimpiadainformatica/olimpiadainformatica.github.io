<?php
    include 'conexion.php';
    session_start();
    $varsesion= $_SESSION['dni_logeado'];

    if($varsesion == null || $varsesion = ''){
        header("location:login.php");
    }



    //SEPARACION DE STRING DE ENFERMEDAD ENVIADO DE DIARIO_PACIENTE PARA ELIMINAR

    $texto=$_REQUEST['id'];//SE RECIBE EL ID DE tabla diario_paciente y el texto de enfermedad
    $separada = explode(',', $texto);

    $id_d = intval($separada[0]);
    $nombre_e = $separada[1];

    //OBTENGO EL STRING ORIGINAL DE ENFERMEDAD
    $sel = $con -> query("SELECT tipo_enfermedad FROM `diario_paciente` WHERE id_diario=$id_d;");
    while($fila = $sel -> fetch_assoc()){
        $original=$fila['tipo_enfermedad'];
    }


    //REEMPLAZO EL STRING POR UNA CADENA VACIA '' ASI QUEDA ELIMINADO
    $nuevo_texto = str_replace("," . $separada[1], '', $original);


    //CREO UN ARRAY CON TODAS LAS ENFERMEDADES, SEPARADOS POR COMA
    $separada = explode(',', $nuevo_texto);



    //ESTO ES EN CASO DE QUE LA ELIMINACION SEA EN LA PRIMERA PALABRA DEL STRING
    //YA QUE EN LA PRIMERA PALABRA JUSTO DELANTE DE ELLA NO TIENE COMA ','
    for($i=0; $i < count($separada);$i++){
        if($separada[$i]==$nombre_e){
            $nuevo_texto='';
        }
    }

    //EN CASO QUE EL USUARIO HAYA ELIMINADO TODO EL STRING
    if($nuevo_texto==',' || $nuevo_texto==''){
        $nuevo_texto='';
    }

    //AHORA ACTUALIZAMOS EL CAMPO DE ENFERMEDAD, PARA QUE SE ADAPTE AL YA ELIMINADO STRING POR EL USUARIO
    $actualizar_d = "UPDATE `diario_paciente` SET `tipo_enfermedad` = '$nuevo_texto' WHERE id_diario = $id_d;";
    $ins_d = $con -> query($actualizar_d);

    //SI FUNCIONO LA CONSULTA, QUE ME LLEVE A diario_paciente, SINO QUE ME suelte una alerta
    //SOBRE EL ERROR DE CONSULTA Y REGRESE A diario_paciente SIN NINGUN CAMBIO
    if($ins_d){
        echo("<script>
            location.href='diario_paciente.php';
        </script>");
    }else{
        echo("<script>
            alert('El registro no pudo ser eliminado');
            location.href='diario_paciente.php';
        </script>");
    }
?>