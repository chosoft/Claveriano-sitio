<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Arimo|Montserrat&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="../css/estilos.css">
    <title>Noticiias - Claveriano Informante</title>
</head>
<body>
<?php 

$a = $_GET['type'];

if($a == 'log'){


    ?>
    
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
            <a class="btn-user" id="register" href="../yo/<?php echo($resultado['id'])?>">Perfil</a>
            <a href="../salir/" class="btn-user salir-xd">Salir</a>
        </nav>
    </div>
    <nav id="lol">   
            <a href="../home/">Inicio</a>
            <a id="perfil-xd"class="btn-user" href="../yo/<?php echo($resultado['id'])?>">Perfil</a>
            <a href="../subir/">Subir imagen</a>
            <a href="../noticias/log" class="" id="register">Noticias</a>
            <a id="salir-xd"href="../salir/" class="btn-user salir-xd">Salir</a>
        </nav>
</div>
</header>
<?php
;}else{?>
<header>
<div class="wp-nav">
    <div class="logo wd-header"><img src="../logo-header.ico" alt=""><h1 id='lolTl'  class="logo-title">bienvenido <?php echo $usuario;?></h1></div>
    <div class="wp-nav wd-header">
        <div class="wp-btn-op">
            <img id="mn" src="../menu.png" alt="">
        </div>
        <nav>
            <a class="" href="http://claveriano-informante.epizy.com/">Inicio</a>
            <a href=""class="">Noticias</a>
            <a id="btn-user salir-xd"class="btn-user"  href="../registrarse/">Registrarse</a>
            <a href="../ingresar/" class="btn-user">Iniciar sesion</a>
        </nav>
    </div>
    <nav id="lol">   
    <a class="" href="http://claveriano-informante.epizy.com/">Inicio</a>
            <a href=""class="">Noticias</a>
            <a id="register"class="btn-user perfil-xd"  href="../registrarse/">Registrarse</a>
            <a href="../ingresar/" class="btn-user salir-xd">Iniciar sesion</a>
        </nav>
</div>
</header>

<?php;}?>



<div class="space"></div>
<main class="noticias-wp">
    <section class="navWidget">
        <nav>
            <a href="">Todo</a>
            <a href="">Deporte</a>
            <a href="">Blog</a>
        </nav>
    </section>
    <section class="noticias-wp">
        <section class="all">

        </section>
        <section class="deporte">

        </section>
        <section class="blog">

        </section>
    </section>
</main>

<script src="../js/jquery.min.js"></script>
<script src="../js/script.js"></script>
</body>
</html>