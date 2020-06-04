<?php
    require 'conexion.php';
    session_start();

    $clave = $_POST['password'];
    $usuario = $_POST['usuario'];
    $alert = "su usuario o contraserña son incorrectos";
    if ($usuario == "'or''='" || $clave == "'or''='") {
        header("location:../error.php");
    } else {
        $query = "SELECT COUNT(*) as contar FROM tb_users where username = '$usuario' and password = '$clave'";

    $consulta  =mysqli_query($conexion,$query);
    $array = mysqli_fetch_array($consulta);
    if ($array['contar'] >0) {
        $_SESSION['username'] = $usuario;
        $_SESSION['password'] = $clave;
        header("location:../index.php");
    }
    else{   
        header("location:../sing-in.php");
        }
    }
    
   
?>