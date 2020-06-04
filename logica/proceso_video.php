<?php 

include('conexion.php');
if (isset($_POST['submit'])) {   
    if(is_uploaded_file($_FILES['fichero']['tmp_name'])) { 
        $ruta = "../videos/"; 
        $nombrefinal = $_FILES['fichero']['name'];
        $upload= $ruta.$nombrefinal;  
        if(move_uploaded_file($_FILES['fichero']['tmp_name'], $upload)) { //movemos el archivo a su ubicacion 

                   $nombre  = $_POST["nombre"]; 


                   $query = "INSERT INTO archivos (name,ruta,tipo,size) VALUES ('$nombre','".$nombrefinal."','".$_FILES['fichero']['type']."','".$_FILES['fichero']['size']."')"; 

                   mysqli_query($conexion,$query); 
       header('location:../display_files.php'); 
        }  
    }  
 } 

?>