<?php /* modificar.php */?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/estilo.css">

        <title>Document</title>
    </head>
    <body>
        <?php
            include ("abre.php");
            $id = $_REQUEST['Id'];
            
            $consulta = "DELETE FROM empleados WHERE Id = '$Id' ";
            $resultado = $conexion->query($consulta);   
            
            $row= $resultado-> fetch_assoc();
        ?>
        <center>
            <h1>Actualizacion de Datos</h1>
            <form action="actualizar.php?id=<?php echo $row['id']; ?>" method="post" ectype="multipart/form-data"><br><br>

                <input type = "text" name="nombre" placeholder="nombre.." value = "<?php echo $row['nombre'];?>"/>  
                <input type = "text" name="apellidos" placeholder="apellidos.." value = "<?php echo $row['apellidos'];?>"/>  
                <input type = "text" name="puesto" placeholder="puesto.." value = "<?php echo $row['puesto'];?>"/>  
                <input type = "text" name="horario" placeholder="horario.." value = "<?php echo $row['horario'];?>"/> 

                <td><img height="50px" src="data:image/jpeg;base64,<?php echo base64_encode($row['imagen']); ?>"></td>
                <input type="submit" value="enviar">
            </form>
        </center>
    </body>
    </html>