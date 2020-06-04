<?php
    session_start();
    include('logica/conexion.php');
    $usuario = $_SESSION['username'];
    $pass = $_SESSION['password'];
    $q = "SELECT * FROM tb_users WHERE username = '$usuario' AND password = '$pass' ";
    $consulta = mysqli_query($conexion,$q);
    $fetch = mysqli_fetch_assoc($consulta);
    if ($usuario == ""|| $usuario == null) {
        header("location:sing-in.php");
    }
    if ($fetch['id_rol'] == 0) {
        header('location:sing-in.php');
    }

?>
<!-- CSS LISTO -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Arimo|Montserrat&display=swap" rel="stylesheet"> 
    <title>Document</title>
</head>
<body>
<header>
<div class="wp-nav">
    <div class="logo wd-header"><img src="../logo-header.ico" alt=""><h1 class="logo-title">bienvenido <?php echo $usuario;?></h1></div>
    <div class="wp-nav wd-header">
        <nav>   
            <a href="index-user.php">Inicio</a>
            <a href="subir.php">Subir imagen</a>
            <a href="">Blog</a>
            <a class="perfil" href="perfil.php?id=<?php echo($fetch['id'])?>">Perfil</a>
            <a href="logica/salir.php" class="salir">Salir</a>
        </nav>
    </div>
</div>
</header>
<div class="space"></div>
<div class="space"></div>

<main class="post-container">
    <div class="wp-posts">
    <?php
                 include("../logica/conexion.php");
                 $query = "SELECT * FROM tb_imagenes order by id desc";
                 $resultado=$conexion->query($query);
                 while ($row = $resultado->fetch_assoc()) {
                     
                 
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