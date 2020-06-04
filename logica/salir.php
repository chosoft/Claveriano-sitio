<?php
    session_start();
    session_destroy();
    
    header("location: ../index.php");
    exit();
    //este archivo solo cierra la sesion
?>