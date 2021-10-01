<?php
    $varsesion= $_SESSION['dni_logeado'];

    if($varsesion == null || $varsesion = ''){
        header("location:login.php");
    }
    
    session_start();

    session_destroy();

    header("location:index.php");
?>