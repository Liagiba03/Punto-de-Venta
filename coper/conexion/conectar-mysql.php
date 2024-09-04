<?php
    $servidor = "localhost";
    $usuario = "root";
    $nomBaseDatos = "project";
    $password= "SusSand#";
    // Conectando a la base de datos
    $conexion = mysqli_connect($servidor,$usuario,$password, $nomBaseDatos);
    if($conexion){
        #echo "si se pudo may :)";
    }else{
        #echo "no se pudp wey";
    }

?>
