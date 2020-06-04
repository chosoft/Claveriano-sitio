<?php
session_start();
include('conexion.php');
$usuario = $_SESSION['username'];
$clave = $_SESSION['password'];
$query = "SELECT * FROM tb_users WHERE username = '$usuario' AND password = '$clave' ";
$consulta_sql = mysqli_query($conexion,$query);
$resultado = mysqli_fetch_assoc($consulta_sql);
if (!isset($usuario)) {
    header('location: sing-in.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../estilos.css">

</head>
<body>
<header>
<div class="wp-nav">
    <div class="logo"><img src="" alt=""></div>
    <nav>   
    <a href="../index.php">Inicio</a>
    <a href="../subir.php">Subir imagen</a>
    <a href="">Blog</a>
</div>
</header>
<div class="space"></div>
<div class="container">
    <div class="wp-container">
    <?php
    include("conexion.php");
    $nombre = $_POST['nombre'];
    $id =$_POST['id'];
    $coment = $_POST['coment'];
    $imagen = addslashes(file_get_contents($_FILES['img']['tmp_name']));
    if ($_FILES["img"]["type"]=="image/jpeg" || $_FILES["img"]["type"]=="image/pjpeg" || $_FILES["img"]["type"]=="image/gif" || $_FILES["img"]["type"]=="image/bmp" || $_FILES["img"]["type"]=="image/png")
    {
        $query = "INSERT INTO tb_imagenes(nombre,img,comentario,id_user_public) VALUES('$nombre','$imagen','$coment','$id')";
        $resultado = $conexion->query($query);
        if ($resultado) {
            header('location:../index.php');
        }
        else {
            header('location: ../subir.php');
        }   
    }
    else{
        header('location: ../subir.php');
    }
   
?>
    </div>
</div>

</body>
</html>