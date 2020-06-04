<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="estilos.css">

    <title>Document</title>
    
</head>
<body>
<header>
<div class="wp-nav">
    <div class="logo"><img src="" alt=""></div>
    <nav>   
    <a href="index.php">Inicio</a>
    <a href="subir.php">Subir imagen</a>
    <a href="">Blog</a>
</div>
</header>
<div class="space"></div>
<div class="cont">
    <div class="wp-form">
    <form method="POST" action="logica/proceso_video.php" enctype="multipart/form-data">
        <input type="text" name="nombre" required placeholder="Autor..." id="nombre">
        <input type="file" onchange='cambiar()' required name="fichero" id="archivo">
        <label for="archivo"><span>Sube un archivo</span></label><br><br>
        <span id="info"></span>
        <div class="btn">
        <input type="submit" value="Aceptar">   
        </div>
    </form>
    </div>
</div>
<script>
    function cambiar() {
        var pdrs = document.getElementById('archivo').value;
        document.getElementById('info').innerHTML ="Archivo: "+pdrs;
        if (pdrs.length > 15     ) {
            pdrs.style.fontSize = "15px";
        } else {
            
        }
    }

</script>
</body>
</html>