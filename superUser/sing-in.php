
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/sing-in.css">
    <link href="https://fonts.googleapis.com/css?family=Arimo|Montserrat&display=swap" rel="stylesheet"> 

</head>
<body>
<header>
<div class="wp-nav">
    <div class="logo wd-header"><img src="../logo-header.ico" alt=""><h1 class="logo-title">logo</h1></div>
    <div class="wp-nav wd-header">
        <nav>   
            <a href="index.php">inicio</a>
            <a href="">blog</a>
            <a href="" class="btn-user" id="register">registrarse</a>
            <a href="index.php" class="btn-user">iniciar sesion</a>
        </nav>
    </div>
</div>
</header>
<div class="space"></div>
<main>
    <div class="wp-form">
        <form id="sail" action="logica/logear.php" method="post">
                <div class="wp-title">
                    <h2>incia sesion</h2>
                </div>
                <div class="wp-inputs">
                    <label class="label" for="us">usuario</label>
                    <input class="inputs" type="text" name="usuario" id="us">
                    <label class="label" for="pw">contraseña</label>
                    <input class="inputs" type="password" name="password" id="pw">
                </div>
                <div class="wp-btn">
                    <input class="sb" type="submit" value="Entrar">
                </div>
        </form>
    </div>
</main>
</body>
</html>