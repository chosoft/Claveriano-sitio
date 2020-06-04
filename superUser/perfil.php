<?php 

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
    <link rel="stylesheet" href="css/perfil.css">
    <title>Document</title>
</head>
<body>
<header>
<div class="wp-nav">
    <div class="logo wd-header"><img src="../logo-header.ico" alt=""><h1 class="logo-title">bienvenido <?php echo $usuario;?></h1></div>
    <div class="wp-nav wd-header">
        <nav>   
            <a href="index.php">Inicio</a>
            <a href="subir.php">Subir imagen</a>
            <a href="">Blog</a>
            <a class="perfil" href="perfil.php?id=<?php echo($resultado_us['id'])?>">Perfil</a>
            <a href="logica/salir.php" class="salir">Salir</a>
        </nav>
    </div>
</div>
</header>
<div class="space"></div>

<main class="post-container">
    <div class="wp-title-main">
        <h2 class="main-tl">tus publicaciones</h2>
    </div>
    <div class="wp-posts">
    <?php
                 include("logica/conexion.php");
                 $q = "SELECT tb_imagenes.id,tb_imagenes.nombre,tb_imagenes.img,tb_imagenes.comentario FROM tb_imagenes INNER JOIN tb_users WHERE tb_users.id = '$id_us' AND tb_imagenes.id_user_public = '$id'  ORDER BY `tb_imagenes`.`id` DESC ";
                 $resultado= mysqli_query($conexion,$q);
                 while ($row = mysqli_fetch_assoc($resultado)) {
                     
                 
             ?>
         <div class="post" id="<?php echo $row['id'];?>" >
                <div class="wp-cont-post">
                    <div class="wp-username">
                        <span><a href="user-account.php?id=<?php echo($row['id_user_public']) ?>"><?php echo $row['nombre'];?></a></span>
                    </div>
                    <div class="wp-img">
                        <img src="data:image/jpg;base64,<?php echo base64_encode($row['img']);?>" alt="imagen numero <?php echo $row['id'];?>">
                    </div>
                    <div class="wp-coment">
                        <p class="coment"><?php echo $row['comentario'];?></p>
                    </div>
                    <div class="wp-num">
                        <span>imagen #<?php echo $row['id'];?></span>
                        <a class="delete" href="logica/proceso_eliminar.php?id=<?php echo $row['id']?>" class="delete">Eliminar</a>
                    </div>
                </div>
         </div>
        
         <?php
                 }
             ?>
    </div>
</main>


</body>
</html>