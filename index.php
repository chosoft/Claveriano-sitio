
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Arimo|Montserrat&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/estilos.css">
    <title>Inicio</title>
</head>
<body>
<header>
<div class="wp-nav">
    <div class="logo wd-header"><img src="logo-header.ico" alt=""><h1 id='lolTl'  class="logo-title">bienvenido <?php echo $usuario;?></h1></div>
    <div class="wp-nav wd-header">
        <div class="wp-btn-op">
            <img id="mn" src="../menu.png" alt="">
        </div>
        <nav>   
            <a class="" href="http://claveriano-informante.epizy.com/">Inicio</a>
            <a href="noticias/null"class="">Noticias</a>
            <a id="register"class="btn-user"  href="registrarse/">Registrarse</a>
            <a href="ingresar/" class="btn-user">Iniciar sesion</a>
        </nav>
    </div>
    <nav id="lol">   
    <a class="" href="http://claveriano-informante.epizy.com/">Inicio</a>
            <a href="noticias/null" class="">Noticias</a>
            <a id="register"class="btn-user perfil-xd"  href="registrarse/">Registrarse</a>
            <a href="ingresar/" class="btn-user salir-xd">Iniciar sesion</a>
        </nav>
</div>
</header>
<div class="space"></div>
<main class="post-container">
    <div class="wp-posts">
    <?php
    //traemos todas las imagens y las mostramos
                 include("logica/conexion.php");
                 $query = "SELECT * FROM tb_imagenes order by id desc";
                 $resultado=$conexion->query($query);
                 while ($row = $resultado->fetch_assoc()) {
                     
                 
             ?>
         <div class="post" id="<?php echo $row['id']?>" >
                <div class="wp-cont-post">
                    <div class="wp-username">
                        <span><?php echo $row['nombre']?></span>
                    </div>
                    <div class="wp-img">
                        <img src="data:image/jpg;base64,<?php echo base64_encode($row['img']);?>" alt="imagen numero <?php echo $row['id']?>">
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

<script src="js/jquery.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>