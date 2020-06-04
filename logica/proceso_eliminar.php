<?php 

session_start();
include('conexion.php');
$usuario = $_SESSION['username'];
$clave = $_SESSION['password'];
$query = "SELECT * FROM tb_users WHERE username = '$usuario' AND password = '$clave' ";
$consulta_sql = mysqli_query($conexion,$query);
$resultado_us = mysqli_fetch_assoc($consulta_sql);
$id_us = $resultado_us['id'];
$id = $_REQUEST['id'];
if (!isset($usuario)) {
    header('location: sing-in.php');
}
else{
    $q = "DELETE FROM tb_imagenes WHERE id = '$id'";
    $consulta= mysqli_query($conexion,$q);
    if ($consulta) {
        header('location:../perfil.php?id='.$id_us);
    }
    else{
        echo"Error";
    }
}



?>