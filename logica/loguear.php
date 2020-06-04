<?php 
//este es el archivo que loguea a los usuarios y los manda a su perfil
   include('conexion.php');//incluimos la conexion para usar sus variables
   session_start();//esto es para usar las varibales de sesion
    //tomamos las variables con $_POST
    $user = $_POST['user'];
    $pw = $_POST['pw'];
//verificamos si no estan vacias
    if($user == null || $pw == null){//si es asi lo devolvemos al formulario de ingreso
        header('location:../ingresar/');
    }
    else{//de no ser asi lo logueamos

        //prevenimos inyecciones sql
        $user = addcslashes($user,"'#=?¡¿^");
        $pw = addcslashes($pw,"'#=?¡¿^");

        //consulta para ver si el usuario existe
        $q = "SELECT COUNT(*) as contar FROM tb_users WHERE username = '$user' AND password = '$pw'";
        $consulta = mysqli_query($conexion,$q) ;
        $array = mysqli_fetch_array($consulta);

        //si exite creamos las variables de sesion y lo redireccionamos
        if($array['contar'] > 0){
            $_SESSION['username'] = $user ;
            $_SESSION['password'] = $pw;
            header('location:../home/');
        }
        else{
            //si hubo un problema lo enviamos al inicio
            header('location:../../img_media');
        }
    }

?>