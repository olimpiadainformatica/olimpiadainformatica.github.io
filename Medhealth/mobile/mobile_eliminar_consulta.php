<?php
    include '../conexion.php';

    session_start();
    $varsesion= $_SESSION['dni_logeado'];

    if($varsesion == null || $varsesion = ''){
        header("location:mobile_login.php");
    }

    //SE RECIBE EL ID DE consulta, CON ESO SE ENCUENTRA EL CAMPO Y SE ELIMINA
    $id = $_REQUEST['id'];
    $del = $con -> query("DELETE FROM `consulta` WHERE id_con = $id ");

    if($del){
        echo("<script>
            location.href='mobile_diario_paciente.php';
        </script>");
    }else{
        echo("<script>
            alert('El registro no pudo ser eliminado');
            location.href='mobile_diario_paciente.php';
        </script>");
    }
?>