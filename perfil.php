<?php 
//verificamos si el usuario inicio sesion

session_start();
include('logica/conexion.php');
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Arimo|Montserrat&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../css/perfil.css">
    <title>Perfil</title>
</head>
<body>
<header>
<div class="wp-nav">
    <div class="logo wd-header"><img src="../logo-header.ico" alt=""><h1 id='lolTl'  class="logo-title">bienvenido <?php echo $usuario;?></h1></div>
    <div class="wp-nav wd-header">
        <div class="wp-btn-op">
            <img id="mn" src="../menu.png" alt="">
        </div>
        <nav>   
            <a href="../home/">Inicio</a>
            <a href="../subir/">Subir imagen</a>
            <a href="../noticias/log">Noticias</a>
            <a class="perfil" href="../yo/<?php echo $id_us?>">Perfil</a>
            <a href="../salir/" class="salir">Salir</a>
        </nav>
    </div>
    <nav id="lol">   
            <a href="../home/">Inicio</a>
            <a id="perfil-xd"class="perfil" href="../yo/<?php echo $id_us?>">Perfil</a>
            <a href="../subir/">Subir imagen</a>
            <a href="../noticias/log">Noticias</a>
            <a id="salir-xd"href="../salir/" class="salir">Salir</a>
        </nav>
</div>
</header>
<div class="space"></div>

<main class="post-container">
    <div class="wp-title-main">
        <h2 class="main-tl">tus publicaciones</h2>
    </div>
    <div class="wp-posts">
    <?php

    //traemos los datos del usuario que esta usando la plataforma
                 include("logica/conexion.php");
                 $q = "SELECT tb_imagenes.id,tb_imagenes.nombre,tb_imagenes.img,tb_imagenes.comentario,tb_imagenes.id_user_public FROM tb_imagenes INNER JOIN tb_users WHERE tb_users.id = '$id_us' AND tb_imagenes.id_user_public = '$id'  ORDER BY `tb_imagenes`.`id` DESC ";
                 $resultado= mysqli_query($conexion,$q);
                 while ($row = mysqli_fetch_assoc($resultado)) {
                     
                 
             ?>
         <div class="post" id="<?php echo $row['id'];?>" >
                <div class="wp-cont-post">
                    <div class="wp-username">
                        <span><a href="../usuario/<?php echo($row['id_user_public']) ?>"><?php echo $row['nombre'];?></a></span>
                    </div>
                    <div class="wp-img">
                        <img src="data:image/jpg;base64,<?php echo base64_encode($row['img']);?>" loading="lazy" alt="imagen numero <?php echo $row['id'];?>">
                    </div>
                    <div class="wp-coment">
                        <p class="coment"><?php echo $row['comentario'];?></p>
                    </div>
                    <div class="wp-num">
                        <span>imagen #<?php echo $row['id'];?></span>
                        <a class="delete" href="../eliminar/<?php echo $row['id']?>" class="delete">Eliminar</a>
                    </div>
                </div>
         </div>
        
         <?php
                 }
             ?>
    </div>
</main>

<script src="../js/jquery.min.js"></script>
<script src="../js/script.js"></script>
</body>
</html>