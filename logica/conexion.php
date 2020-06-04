<?php

//Esta es la conexion a la base de datos 
    $conexion = new mysqli("sql100.epizy.com","epiz_25932727","0SMd0WGKRe","epiz_25932727_claveriano");
//sql100.epizy.com Seria el host
//epiz_25932727 seria el usuario de base de datos
//0SMd0WGKRe seria la contraseña de la base de datos
//epiz_25932727_claveriano este seria el nombre de la base de datos
    if ($conexion ) {
    }
    else {
        echo"conexion no exitosa";
    }
?>