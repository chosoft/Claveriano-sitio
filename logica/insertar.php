<?php

    include('conexion.php');
    $user = $_POST['usuario'];
    $pw1 = $_POST['pass1'];
    $pw2 = $_POST['pass2'];
    $sexo = $_POST['sexo'];
    $date = date('Y-m-d H:i:s');
    if($user == null|| $pw1 == null || $pw2 == null){
        header('location:../registrarse/');
    }
    else{
        if($pw1 == $pw2 ){
            $user = addcslashes($user,"'#=?¡¿^");
            $pw1 = addcslashes($pw1,"'#=?¡¿^");
            $date = addcslashes($date,"'#=?¡¿^");
            $sexo = addcslashes($sexo,"'#=?¡¿^");
            $q = "INSERT INTO tb_users(username,password,date,sexo) VALUES('$user','$pw1','$date','$sexo')";
            $consulta = mysqli_query($conexion,$q);
            if($consulta){
                $user = addcslashes($user,"'#=?¡¿^");
                $pw1 = addcslashes($pw1,"'#=?¡¿^");
                $qr = "SELECT COUNT(*) as contar FROM tb_users WHERE username = '$user' AND password = '$pw1'";
                $consulta2 = mysqli_query($conexion,$qr) ;
                $array = mysqli_fetch_array($consulta2);
                if($array['contar'] > 0){
                    session_start();
                    $_SESSION['username'] = $user ;
                    $_SESSION['password'] = $pw1;
                    header('location:../home/');
                }
                else{
                    header('location:../../img_media');
                }
            }
            else{
                header('location:../../img_media');
            }
        }
        else{
            echo"Ha ocurrido un erro..";
            header('location:../../img_media');
        }        
    }

?>