<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Arimo|Montserrat&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../css/sing-up.css">
    <title>Registrarse</title>
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
            <a href="../noticias/null"class="">Noticias</a>
            <a id="register"class="btn-user"  href="../registrarse/">Registrarse</a>
            <a href="../ingresar/" class="btn-user">Iniciar sesion</a>
        </nav>
    </div>
    <nav id="lol">   
    <a class="" href="http://claveriano-informante.epizy.com/">Inicio</a>
            <a href="../noticias/null"class="">Noticias</a>
            <a id="register"class="btn-user perfil-xd"  href="../registrarse/">Registrarse</a>
            <a href="../ingresar/" class="btn-user salir-xd">Iniciar sesion</a>
        </nav>
</div>
</header>
<div class="space"></div>
<main>
    <div class="wp-form"> 
        <form id="formAct" action="../logica/insertar.php" method="post">
            <div class="wp-title">
                <h1>registrate</h1>
            </div>
            <div class="wp-inputs">
                    <label class="label" for="us">usuario</label>
                    <input class="inputs" type="text" name="usuario" id="us">        
                    <label class="label" for="pass">contraseña</label>
                    <input class="inputs pws" type="password" name="pass1" id="pass">
                    <label class="label" for="pw2">contraseña(nuevamente)</label>
                    <input class="inputs pws" type="password" name="pass2" id="pw2">
            </div>
            <div class="wp-radios">
                <label class="label-radio s1" id="l1" for="s1" onclick="change();">hombre</label>
                <input type="radio" name="sexo" class="radio" id="s1" value="Hombre">
                <label class="label-radio s2" id="l2" for="s2" onclick="change2();">mujer</label>
                <input type="radio" name="sexo" class="radio" id="s2" value="Mujer">
            </div>
            <div class="wp-submit">
                <input class="submit" type="submit" value="Enviar">
            </div>
            <div class="wp-login">
                <span><a href="../ingresar/">¿Ya tienes una cuenta? inicia sesion</a></span>
            </div>
        </form>
    </div>
</main>
<script src="../js/form.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/script.js"></script>
</body>
</html>