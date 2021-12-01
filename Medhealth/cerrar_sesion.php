<?php
    $varsesion= $_SESSION['dni_logeado'];

    if($varsesion == null || $varsesion = ''){
        header("location:login.php");
    }
    
    session_start();
    /*siempre para que tome una pagina como parte de la sesion, se debe poner 
    session_start*/

    session_destroy();
    /*session_destroy elimina la sesion, es decir deja las variables de esta vacias,
    tal como la variable $_SESSION[''], ya no tiene un nombre propio y ni un dato dentro de el*/

    header("location:index.php");//redireccion a la pagina index al cerrar sesion
?>