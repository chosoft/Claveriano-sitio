<?php
    include('conexion_img.php');

    $id = $_REQUEST['id'];
    
    $query  ="DELETE FROM tb_imagenes WHERE id = '$id'";
    $resul = $conexion->query($query);
    if ($resul) {
        header("location:../index.php");
    }
    else{
        echo"dont";
    }
?>  