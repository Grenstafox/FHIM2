<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RH</title>

</head>
    <body>
        <center>
            <h1>Registro de Datos</h1>
                <form action="guardar.php" method="POST" ectype="multipart/form-data"><br><br>

                        <input type="text" name="nombre" placeholder="nombre" value=""><br><br>
                        <input type="text" name="apellidos" placeholder="apellidos" value=""><br><br>
                        <input type="text" name="puesto" placeholder="puesto" value=""><br><br>
                        <input type="text" name="horario" placeholder="apellidos" value=""/><br><br>

                        <input type="file" name= "Imagen">
                        <input type="submit" value="Aceptar"/>
                </form>
        </center>
    </body>
</html>