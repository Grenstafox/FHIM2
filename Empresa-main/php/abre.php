<?php

    //$conexion = new mysqli("fdb1030.awardspace.net", "4585643_formu", "QD?m?+K{9(2C!uby", "4585643_formu");
    $conexion = new mysqli("localhost", "root", "", "empresa");    
    if($conexion){
        echo "Conexion establecida";
    }else{
        echo "Fallo la conexion";
    }

?>