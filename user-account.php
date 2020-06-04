<?php
session_start();
include('logica/conexion.php');
$usuario = $_SESSION['username'];
$clave = $_SESSION['password'];
$query = "SELECT * FROM tb_users WHERE username = '$usuario' AND password = '$clave' ";
$consulta_sql = mysqli_query($conexion,$query);
$resultado = mysqli_fetch_assoc($consulta_sql);
$id_us = $resultado['id'];
if (!isset($usuario)) {
    header('location: ../ingresar/');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Arimo|Montserrat&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../css/user-account.css">
    <title>Usuario</title>
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
            <a href="index-user.php">Inicio</a>
            <a href="subir.php">Subir imagen</a>
            <a href="noticias.php">Noticias</a>
            <a class="perfil" href="perfil.php?id=<?php echo($resultado['id'])?>">Perfil</a>
            <a href="logica/salir.php" class="salir">Salir</a>
        </nav>
    </div>
    <nav id="lol">   
            <a href="index-user.php">Inicio</a>
            <a id="perfil-xd"class="perfil" href="perfil.php?id=<?php echo($resultado['id'])?>">Perfil</a>
            <a href="subir.php">Subir imagen</a>
            <a href="noticias.php">Noticias</a>
            <a id="salir-xd"href="logica/salir.php" class="salir">Salir</a>
        </nav>
</div>
</header>
<div class="space"></div>
<?php 
    $id_img = $_REQUEST['id'];
    $consulta = "SELECT username FROM tb_users WHERE id = '$id_img'";
    $consulta_bd = mysqli_query($conexion,$consulta);
    $res = mysqli_fetch_assoc($consulta_bd);
?>
<main class="post-container">
    <div class="wp-title-main">
        <h2 class="main-tl">publicaciones de <?php echo $res['username']?></h2>
    </div>
    <div class="wp-posts">
    <?php
    
    $id_img = $_REQUEST['id'];
    $q = "SELECT tb_imagenes.id,tb_imagenes.nombre,tb_imagenes.img,tb_imagenes.comentario,tb_imagenes.id_user_public  FROM tb_imagenes INNER JOIN tb_users WHERE tb_users.id = '$id_us' AND tb_imagenes.id_user_public = '$id_img'  ORDER BY `tb_imagenes`.`id` DESC  ";
    $resul = mysqli_query($conexion,$q);
    while ($row = mysqli_fetch_assoc($resul)){
        if($row['id_user_public'] == $id_us){
            header('location: ../yo/'.$id_us);
        }
    ?>
         <div class="post" id="<?php echo $row['id'];?>" >
                <div class="wp-cont-post">
                    <div class="wp-username">
                        <span><a href="user-account.php?id=<?php echo($row['id_user_public']) ?>"><?php echo $row['nombre'];?></a></span>
                    </div>
                    <div class="wp-img">
                        <img src="data:image/jpg;base64,<?php echo base64_encode($row['img']);?>"loading="lazy"  alt="imagen numero <?php echo $row['id'];?>">
                    </div>
                    <div class="wp-coment">
                        <p class="coment"><?php echo $row['comentario'];?></p>
                    </div>
                    <div class="wp-num">
                        <span>imagen #<?php echo $row['id'];?></span>
                    </div>
                </div>
         </div>
<?php }?>
</div>
</main>
</body>
</html>