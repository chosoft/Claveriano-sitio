<?php
//verificamos si el usuario inicio sesion
session_start();
include('logica/conexion.php');
$usuario = $_SESSION['username'];
$clave = $_SESSION['password'];
$query = "SELECT * FROM tb_users WHERE username = '$usuario' AND password = '$clave' ";
$consulta_sql = mysqli_query($conexion,$query);
$resultado = mysqli_fetch_assoc($consulta_sql);
if (!isset($usuario)) {
    header('location: ../ingresar/');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Arimo|Montserrat&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../css/index-user.css">

    <title>Home</title>
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
            <a href="../noticias/log" class="">Noticias</a>
            <a class="perfil" href="../yo/<?php echo($resultado['id'])?>">Perfil</a>
            <a href="../salir/" class="salir">Salir</a>
        </nav>
    </div>
    <nav id="lol">   
            <a href="../home/">Inicio</a>
            <a id="perfil-xd"class="perfil" href="../yo/<?php echo($resultado['id'])?>">Perfil</a>
            <a href="../subir/">Subir imagen</a>
            <a href="../noticias/log" class="">Noticias</a>
            <a id="salir-xd"href="../salir/" class="salir">Salir</a>
        </nav>
</div>
</header>
<div class="space"></div>
<main class="post-container">
    <div class="wp-posts">
    <?php
    //traemos todas las fotos y las mostramos
                 include("logica/conexion.php");
                 $query = "SELECT * FROM tb_imagenes order by id desc";
                 $resultado=$conexion->query($query);
                 while ($row = $resultado->fetch_assoc()) {
                     
                 
             ?>
         <div class="post" id="<?php echo $row['id']?>" >
                <div class="wp-cont-post">
                    <div class="wp-username">
                        <span><a href="../usuario/<?php echo($row['id_user_public']) ?>"><?php echo $row['nombre']?></a></span>
                    </div>
                    <div class="wp-img">
                        <img src="data:image/jpg;base64,<?php echo base64_encode($row['img']);?>" loading="lazy" alt="imagen numero <?php echo $row['id']?>">
                    </div>
                    <div class="wp-coment">
                        <p class="coment"><?php echo $row['comentario']?></p>
                    </div>
                    <div class="wp-num">
                        <span>imagen #<?php echo $row['id']?></span>
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