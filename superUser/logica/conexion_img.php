<?php
    $conexion = new mysqli("localhost","root","","img_media_bd");

    if ($conexion ) {
    }
    else {
        echo"conexion no exitosa";
    }
?>