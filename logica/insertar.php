<?php

//este es el archivo que ingresa un nuevo usuario a la base de datos

    include('conexion.php');//incluimos el archivo de conexion para usar luego la variable conexion

    //tomamos todos los datos por la variable global $_POST
    $user = $_POST['usuario'];
    $pw1 = $_POST['pass1'];
    $pw2 = $_POST['pass2'];
    $sexo = $_POST['sexo'];
    $date = date('Y-m-d H:i:s');

    //verificamos si los datos son nulos y si es asi lo redireccionamos al formulario de registros
    if($user == null|| $pw1 == null || $pw2 == null){
        header('location:../registrarse/');
    }

    //de lo contrario hacemos el proceso de insertarlo
    else{
        if($pw1 == $pw2 ){//verificamos si las contraseñas son iguales si es asi se prosigue
            //aqui nos aseguramos de que no haya una inyeccion de lenguaje sql para que no dañe nuestra base de datos
            $user = addcslashes($user,"'#=?¡¿^");
            $pw1 = addcslashes($pw1,"'#=?¡¿^");
            $date = addcslashes($date,"'#=?¡¿^");
            $sexo = addcslashes($sexo,"'#=?¡¿^");

            //esta seria la consulta que vamos a enviar la cual ingresa el usuario
            $q = "INSERT INTO tb_users(username,password,date,sexo) VALUES('$user','$pw1','$date','$sexo')";
            $consulta = mysqli_query($conexion,$q);
            if($consulta){
                //aqui verifico si se inserto y lo redirecciono al perfil
                $user = addcslashes($user,"'#=?¡¿^");
                $pw1 = addcslashes($pw1,"'#=?¡¿^");
                //la consulta que revisa si se inserto 
                $qr = "SELECT COUNT(*) as contar FROM tb_users WHERE username = '$user' AND password = '$pw1'";
                $consulta2 = mysqli_query($conexion,$qr) ;
                $array = mysqli_fetch_array($consulta2);
                if($array['contar'] > 0){//si e inserto creamos las variables de sesion y lo enviamos al perfil
                    session_start();
                    $_SESSION['username'] = $user ;
                    $_SESSION['password'] = $pw1;
                    header('location:../home/');
                }
                else{
                    //si no se inserto lo mando al inicio
                    header('location:../../img_media');
                }
            }
            else{
                    //si no se inserto lo mando al inicio
                
                header('location:../../img_media');
            }
        }
        else{//de lo contrario de no coincidir lo enviamos al inicio
            echo"Ha ocurrido un error..";
            header('location:../../img_media');
        }        
    }

?>