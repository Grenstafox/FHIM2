<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Msotrar</title>

    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">
    <script type="text/javascript" src="js/script.js"></script>
</head>
<header>
    <section id="espacio"></section>
    <section id="banner"><img src="img/fondo.jpg" alt=""></section>
    <section id="fecha"></section>
    <div id="calendario">
        <p id="calendario-dia"></p>
        <p id="calendario-fecha"></p>
        <p id="calendario-month-year"></p>
    </div>
</header><br>
<body>
    <center>
        <tr><h3>Lista de empleados</h3></tr>
        <table border=0>
            <thead>

                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Puesto</th>
                    <th>Horario</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include ("php/abr.php");
                $consulta = "SELECT * FROM";
                $resultado= $conexion->query($consulta);
                while($row=$resultado->fetch_assoc()){
                ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['nombre'] ?></td>
                    <td><?php echo $row['apellidos'] ?></td>
                    <td><?php echo $row['puesto'] ?></td>
                    <td><?php echo $row['horario'] ?></td>

                    <td><img height="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']); ?>"></td>

                    <th><a href ="php/modificar.php?id=<?php echo $row ['id']; ?>"><img height="35px" src="" alt="img/cam.png"></a></th>

                    <th><a href ="php/modificar.php?id=<?php echo $row ['id']; ?>"><img height="35px" src="" alt="img/borr.png"></a></th>
                </tr>
            </tbody>

            <?php
                }
            ?>
        </table>
        <tr>
            <th colspan="11"><a href="php/agregar.php">Agregar Clientes</th>
        </tr>
    </center>
</body><br><br>

<footer>
    <center>
        <p>desarrolladores it / contacto: alumno17.marco.jesus@gmail.com</p>
        <p>Ciudad Ju&aacute;rez, Chih. Marzo - 2025</p>
    </center>
</footer>
</html>