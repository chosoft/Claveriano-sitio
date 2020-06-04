<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sing-in.css">
    <link href="https://fonts.googleapis.com/css?family=Arimo|Montserrat&display=swap" rel="stylesheet"> 

    <title>Ingresar</title>
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
            <a class="" href="http://claveriano-informante.epizy.com/">Inicio</a>
            <a href="../noticias/null" class="">Noticias</a>
            <a id="register"class="btn-user"  href="../registrarse/">Registrarse</a>
            <a href="../ingresar/" class="btn-user">Iniciar sesion</a>
        </nav>
    </div>
    <nav id="lol">   
    <a class="" href="http://claveriano-informante.epizy.com/">Inicio</a>
            <a href="../noticias/null" class="">Noticias</a>
            <a id="register"class="btn-user perfil-xd"  href="../registrarse/">Registrarse</a>
            <a href="../ingresar/" class="btn-user salir-xd">Iniciar sesion</a>
        </nav>
</div>
</header>
<div class="space"></div>
<main>
    <div class="wp-form">
        <form id="formAct" action="../logica/loguear.php" method="post">
            <div class="wp-title">
                <h1>inicia sesion</h1>
            </div>
            <div class="wp-inputs">
                <label for="us" class="labels">usuario</label>
                <input type="text" class="inputs" placeholder="" name="user" id="us">
                <label for="pass" class="labels">contraseña</label>
                <input type="password" class="inputs"  name="pw" id="pass">
            </div>
            <div class="wp-submit">
                <input class="sb" type="submit" value="Enviar">
            </div>
            <div class="wp-register">
                <span><a href="../registrarse/" class="register">¿No tienes cuenta? registrate</a></span>
            </div>
        </form>
    </div>
</main>
<script src="../js/jquery.min.js"></script>
<script src="../js/script.js"></script>
</body>
</html>