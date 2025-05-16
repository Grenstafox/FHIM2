<?php
    include("abre.php");
    $Id = $_REQUEST['Id'];
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $puesto = $_POST['puesto'];
    $horario = $_POST['horario'];

    $Imagen = addcslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

    $consulta = "UPDATE empleados SET nombre='$nombre', apellidos='$apellidos',
     puesto='$puesto', horario='$horario' WHERE id= '$id'";
    $resultado = $conexion->query($consulta);
    
    if($resultado){
        header("Location: ../index.php");
    }else{
        echo "No se modifico";
    }
?>