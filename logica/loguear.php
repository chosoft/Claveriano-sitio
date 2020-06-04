<?php 

   include('conexion.php');
   session_start();

    $user = $_POST['user'];
    $pw = $_POST['pw'];

    if($user == null || $pw == null){
        header('location:../ingresar/');
    }
    else{
        $user = addcslashes($user,"'#=?¡¿^");
        $pw = addcslashes($pw,"'#=?¡¿^");
        $q = "SELECT COUNT(*) as contar FROM tb_users WHERE username = '$user' AND password = '$pw'";
        $consulta = mysqli_query($conexion,$q) ;
        $array = mysqli_fetch_array($consulta);
        if($array['contar'] > 0){
            $_SESSION['username'] = $user ;
            $_SESSION['password'] = $pw;
            header('location:../home/');
        }
        else{
            header('location:../../img_media');
        }
    }

?>