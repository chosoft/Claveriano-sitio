<?php
session_start();
include('logica/conexion.php');
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
    <link href="https://fonts.googleapis.com/css?family=Arimo|Montserrat&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="css/subir.css">
    <title>Document</title>
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
<main>
    <div class="wp-form">
        <form method="POST" id="formAct"action="logica/proceso_guardar.php" enctype="multipart/form-data">
            <div class="wp-title">
                <h2 class="title-form">hacer una publicacion</h2>
            </div>
            <div class="wp-file-wds">
                <input type="hidden"  class="hd" name="nombre" value="<?php echo $usuario?>" id="nombre">
                <input type="hidden" class="hd"  name="id" value="<?php echo $resultado['id']?>">
                <input type="file" onchange='cambiar()' required name="img" id="archivo">
                <label for="archivo" id="lb-file">sube una foto</label>
            </div>
            <div class="wp-file-info">
                <span id="info"></span>
            </div>
            <div class="wp-coment">
                <div class="wp-tl-cmt">
                    <h2>añade un comentario</h2>
                </div>
                <div class="wp-comt-wd">
                    <textarea name="coment" placeholder="Añade un comentario"></textarea>
                </div>
            </div>
            <div class="btn">
                <input class="sb" type="submit" value="Publicar">   
            </div>
        </form>
    </div>
</main>
<script src="js/form.js"></script>

<script src="js/jquery.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>