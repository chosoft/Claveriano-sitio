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